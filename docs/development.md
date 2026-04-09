# Development Guide

## Prerequisites
- Docker Desktop (or Docker Engine + Compose v2)
- Git

## First-time setup

```bash
# 1. Clone the repo
git clone <repo-url> achdut-bahava
cd achdut-bahava

# 2. Create your local .env
cp .env.example .env
# Edit .env if needed (defaults work for local dev)

# 3. Start Docker services
docker compose up -d

# 4. Run the installer (wait ~30s for containers to be healthy first)
bash scripts/setup.sh
```

The site will be available at:
- **Frontend:** http://localhost:8080
- **Admin:** http://localhost:8080/wp-admin (admin / admin_local_only)

## Daily workflow

```bash
# Start services
docker compose up -d

# Stop services
docker compose down

# Run WP-CLI commands (examples)
docker compose --profile tools run --rm wpcli wp --allow-root option list
docker compose --profile tools run --rm wpcli wp --allow-root plugin list
```

## Theme development

The theme lives in `wordpress/wp-content/themes/achdut-bahava/` and is fully committed to git. Edit files directly — no build step required for CSS/JS (plain CSS and vanilla JS).

## Languages

To regenerate the `.pot` translation template:
```bash
docker compose --profile tools run --rm wpcli wp --allow-root \
  i18n make-pot /var/www/html/wp-content/themes/achdut-bahava \
  /var/www/html/wp-content/themes/achdut-bahava/languages/achdut-bahava.pot
```

To compile `.po` to `.mo` after editing translations:
```bash
msgfmt wordpress/wp-content/themes/achdut-bahava/languages/he_IL.po \
       -o wordpress/wp-content/themes/achdut-bahava/languages/he_IL.mo
```

## Multilingual

Languages are managed by **Polylang**. After first setup:
1. Go to WP Admin → Languages → Settings
2. Set URL modification to "directory name" (`/en/`, `/ru/`, `/` for Hebrew)
3. Translate pages via the Polylang flags in the Pages list

## What's git-ignored

- WordPress core files (installed by Docker)
- All plugins (installed by `setup.sh`)
- `wp-content/uploads/`
- `.env` and `wp-config.php`
