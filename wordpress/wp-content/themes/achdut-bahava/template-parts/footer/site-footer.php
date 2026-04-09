<footer class="site-footer" role="contentinfo">
	<div class="container">
		<div class="site-footer__grid">

			<!-- Brand column -->
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" aria-label="<?php bloginfo( 'name' ); ?>">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-mono.svg' ); ?>"
					     alt="<?php bloginfo( 'name' ); ?>"
					     width="160" height="40"
					     style="filter: brightness(0) invert(1);"
					     loading="lazy">
				</a>
				<p class="footer-brand__tagline">
					<?php esc_html_e( 'Uniting Jews across all spectrums — through mutual respect, empathic curiosity, and love.', 'achdut-bahava' ); ?>
				</p>
				<p class="footer-brand__tagline" style="margin-block-start:0.5rem; font-size:0.85em; opacity:0.6;">
					<?php esc_html_e( 'אחדות באהבה', 'achdut-bahava' ); ?>
				</p>
			</div>

			<!-- Navigation column -->
			<div class="footer-col">
				<h3 class="footer-col__title"><?php esc_html_e( 'Navigate', 'achdut-bahava' ); ?></h3>
				<?php
				wp_nav_menu( [
					'theme_location' => 'footer-nav',
					'menu_class'     => 'footer-nav__list',
					'container'      => 'nav',
					'container_attr' => [ 'aria-label' => __( 'Footer', 'achdut-bahava' ) ],
					'fallback_cb'    => function () {
						echo '<ul class="footer-nav__list">';
						$links = [
							home_url( '/' )            => __( 'Home', 'achdut-bahava' ),
							home_url( '/workshops/' )  => __( 'Workshops', 'achdut-bahava' ),
							home_url( '/donate/' )     => __( 'Donate', 'achdut-bahava' ),
							'#contact'                 => __( 'Contact', 'achdut-bahava' ),
						];
						foreach ( $links as $url => $label ) {
							printf(
								'<li><a class="footer-nav__link" href="%s">%s</a></li>',
								esc_url( $url ),
								esc_html( $label )
							);
						}
						echo '</ul>';
					},
				] );
				?>
			</div>

			<!-- Get Involved column -->
			<div class="footer-col">
				<h3 class="footer-col__title"><?php esc_html_e( 'Get Involved', 'achdut-bahava' ); ?></h3>
				<ul class="footer-nav__list">
					<li><a class="footer-nav__link" href="<?php echo esc_url( home_url( '/workshops/' ) ); ?>"><?php esc_html_e( 'Join a Workshop', 'achdut-bahava' ); ?></a></li>
					<li><a class="footer-nav__link" href="<?php echo esc_url( home_url( '/#tracks' ) ); ?>"><?php esc_html_e( 'Ambassador Program', 'achdut-bahava' ); ?></a></li>
					<li><a class="footer-nav__link" href="<?php echo esc_url( home_url( '/donate/' ) ); ?>"><?php esc_html_e( 'Donate', 'achdut-bahava' ); ?></a></li>
				</ul>
			</div>

			<!-- Contact column -->
			<div class="footer-col">
				<h3 class="footer-col__title"><?php esc_html_e( 'Contact', 'achdut-bahava' ); ?></h3>
				<div class="footer-contact">
					<p class="footer-contact__item">
						📍 <?php esc_html_e( 'Israel', 'achdut-bahava' ); ?>
					</p>
					<p class="footer-contact__item">
						<a href="mailto:info@achdut-bahava.org">info@achdut-bahava.org</a>
					</p>
				</div>
			</div>

		</div><!-- /.site-footer__grid -->

		<div class="site-footer__bottom">
			<p class="footer-copyright">
				&copy; <?php echo esc_html( date( 'Y' ) ); ?>
				<?php bloginfo( 'name' ); ?>.
				<?php esc_html_e( 'All rights reserved.', 'achdut-bahava' ); ?>
			</p>
			<nav class="footer-lang-switcher" aria-label="<?php esc_attr_e( 'Language', 'achdut-bahava' ); ?>">
				<?php get_template_part( 'template-parts/header/language-switcher' ); ?>
			</nav>
		</div>

	</div><!-- /.container -->
</footer>
