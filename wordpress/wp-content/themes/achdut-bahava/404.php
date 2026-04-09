<?php
get_header();
?>
<main id="main" class="site-main">
	<section class="error-404 not-found">
		<div class="container">
			<div class="error-404__content">
				<h1 class="error-404__title">404</h1>
				<h2 class="error-404__subtitle"><?php esc_html_e( 'Page not found', 'achdut-bahava' ); ?></h2>
				<p><?php esc_html_e( 'The page you were looking for does not exist.', 'achdut-bahava' ); ?></p>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
					<?php esc_html_e( 'Back to Home', 'achdut-bahava' ); ?>
				</a>
			</div>
		</div>
	</section>
</main>
<?php
get_footer();
