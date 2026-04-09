<?php
$is_front = is_front_page();
$logo_url = get_template_directory_uri() . '/assets/images/logo.svg';
$logo_white_url = get_template_directory_uri() . '/assets/images/logo-mono.svg';
?>
<a class="skip-link sr-only" href="#main"><?php esc_html_e( 'Skip to content', 'achdut-bahava' ); ?></a>

<header class="site-header <?php echo $is_front ? 'site-header--transparent' : 'site-header--solid'; ?>"
        id="site-header"
        role="banner">
	<div class="site-header__inner">

		<!-- Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?> — <?php esc_html_e( 'Home', 'achdut-bahava' ); ?>">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<img src="<?php echo esc_url( $logo_url ); ?>"
				     alt="<?php bloginfo( 'name' ); ?>"
				     width="200" height="44"
				     loading="eager">
			<?php endif; ?>
		</a>

		<!-- Mobile toggle -->
		<button class="menu-toggle"
		        aria-controls="primary-nav"
		        aria-expanded="false"
		        aria-label="<?php esc_attr_e( 'Open menu', 'achdut-bahava' ); ?>">
			<span class="menu-toggle__icon" aria-hidden="true">
				<span></span>
				<span></span>
				<span></span>
			</span>
		</button>

		<!-- Primary nav -->
		<nav class="primary-nav" id="primary-nav" aria-label="<?php esc_attr_e( 'Primary', 'achdut-bahava' ); ?>">
			<?php
			wp_nav_menu( [
				'theme_location' => 'primary',
				'menu_class'     => 'primary-nav__list',
				'container'      => false,
				'link_before'    => '',
				'link_after'     => '',
				'item_class'     => 'primary-nav__item',
				'fallback_cb'    => function () {
					echo '<ul class="primary-nav__list">';
					echo '<li class="primary-nav__item"><a class="primary-nav__link" href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'achdut-bahava' ) . '</a></li>';
					echo '<li class="primary-nav__item"><a class="primary-nav__link" href="' . esc_url( home_url( '/workshops/' ) ) . '">' . esc_html__( 'Workshops', 'achdut-bahava' ) . '</a></li>';
					echo '</ul>';
				},
			] );
			?>

			<?php get_template_part( 'template-parts/header/language-switcher' ); ?>

			<a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>"
			   class="btn btn--primary btn--sm header-donate">
				<?php esc_html_e( 'Donate', 'achdut-bahava' ); ?>
			</a>
		</nav>

	</div>
</header>

<!-- Push page content below fixed header on non-front pages -->
<?php if ( ! $is_front ) : ?>
	<div style="height:var(--header-height)" aria-hidden="true"></div>
<?php endif; ?>
