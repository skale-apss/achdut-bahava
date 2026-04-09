<?php
/**
 * Template Name: Home Page
 * Template Post Type: page
 */

get_header();
?>
<main id="main" class="site-main">
	<?php get_template_part( 'template-parts/home/hero' ); ?>
	<?php get_template_part( 'template-parts/home/problem' ); ?>
	<?php get_template_part( 'template-parts/home/vision-mission' ); ?>
	<?php get_template_part( 'template-parts/home/our-why' ); ?>
	<?php get_template_part( 'template-parts/home/values' ); ?>
	<?php get_template_part( 'template-parts/home/tracks' ); ?>
	<?php get_template_part( 'template-parts/home/workshops-teaser' ); ?>
	<?php get_template_part( 'template-parts/home/metrics' ); ?>
	<?php get_template_part( 'template-parts/home/cta-banner' ); ?>
</main>
<?php
get_footer();
