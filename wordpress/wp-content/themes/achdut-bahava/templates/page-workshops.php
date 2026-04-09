<?php
/**
 * Template Name: Workshops Page
 * Template Post Type: page
 */

get_header();
?>
<main id="main" class="site-main">
	<?php get_template_part( 'template-parts/workshops/hero' ); ?>
	<?php get_template_part( 'template-parts/workshops/how-it-works' ); ?>
	<?php get_template_part( 'template-parts/workshops/promise' ); ?>
	<?php get_template_part( 'template-parts/workshops/stages' ); ?>
	<?php get_template_part( 'template-parts/workshops/bridges' ); ?>
	<?php get_template_part( 'template-parts/workshops/join-form' ); ?>

	<!-- Final CTA back to home -->
	<section class="section" style="background:var(--color-primary); text-align:center; padding-block:var(--space-16);">
		<div class="container">
			<h2 style="color:white; margin-block-end:var(--space-4);">
				<?php esc_html_e( 'Not ready to join yet?', 'achdut-bahava' ); ?>
			</h2>
			<p style="color:rgba(255,255,255,0.75); font-size:var(--text-lg); margin-block-end:var(--space-8); max-width:50ch; margin-inline:auto; line-height:var(--leading-relaxed);">
				<?php esc_html_e( 'Learn more about our mission, values, and the four ways to get involved.', 'achdut-bahava' ); ?>
			</p>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--secondary btn--lg">
				<?php esc_html_e( '← Back to Home', 'achdut-bahava' ); ?>
			</a>
		</div>
	</section>
</main>
<?php
get_footer();
