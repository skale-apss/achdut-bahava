#!/usr/bin/env bash
# First-run setup: installs WordPress via WP-CLI, activates theme, installs plugins.
# Run after `docker compose up -d` and the containers are healthy.
set -euo pipefail

SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
ENV_FILE="$SCRIPT_DIR/../.env"

if [ -f "$ENV_FILE" ]; then
  # shellcheck source=.env
  set -o allexport; source "$ENV_FILE"; set +o allexport
fi

WP="docker compose --profile tools run --rm wpcli wp --allow-root"

echo "Waiting for WordPress to be ready..."
until $WP core is-installed 2>/dev/null; do
  echo "  Not ready yet, waiting 5s..."
  sleep 5
done || true

if ! $WP core is-installed 2>/dev/null; then
  echo "Installing WordPress..."
  $WP core install \
    --url="${SITE_URL:-http://localhost:8080}" \
    --title="${SITE_TITLE:-Achdut B'Ahavah}" \
    --admin_user="${ADMIN_USER:-admin}" \
    --admin_password="${ADMIN_PASSWORD:-admin_local_only}" \
    --admin_email="${ADMIN_EMAIL:-admin@localhost.local}" \
    --skip-email
fi

echo "Installing languages..."
$WP language core install he_IL --activate || true
$WP language core install ru_RU || true

echo "Setting site language to Hebrew..."
$WP option update WPLANG he_IL
$WP option update date_format "d/m/Y"
$WP option update time_format "H:i"
$WP option update blogdescription "אחדות באהבה - מחברים לבבות"

echo "Activating theme..."
$WP theme activate achdut-bahava

echo "Installing plugins..."
$WP plugin install polylang --activate
$WP plugin install contact-form-7 --activate
$WP plugin install wordpress-seo --activate
$WP plugin install wp-super-cache --activate
$WP plugin install safe-svg --activate
$WP plugin install duplicate-post --activate

echo "Setting up Polylang languages..."
$WP pll lang create "Hebrew" he he_IL 1 ltr || true
$WP pll lang create "English" en en_US 0 ltr || true
$WP pll lang create "Russian" ru ru_RU 0 ltr || true

echo "Creating pages..."
HOME_ID=$($WP post create \
  --post_type=page --post_status=publish \
  --post_title="Home" --post_name="home" \
  --porcelain 2>/dev/null || echo "")

WORKSHOPS_ID=$($WP post create \
  --post_type=page --post_status=publish \
  --post_title="Workshops" --post_name="workshops" \
  --porcelain 2>/dev/null || echo "")

echo "Configuring reading settings..."
if [ -n "$HOME_ID" ]; then
  $WP option update show_on_front page
  $WP option update page_on_front "$HOME_ID"
fi

echo "Setting permalink structure..."
$WP rewrite structure '/%postname%/' --hard

echo ""
echo "✓ Setup complete!"
echo "  Site:  ${SITE_URL:-http://localhost:8080}"
echo "  Admin: ${SITE_URL:-http://localhost:8080}/wp-admin"
echo "  User:  ${ADMIN_USER:-admin} / ${ADMIN_PASSWORD:-admin_local_only}"
