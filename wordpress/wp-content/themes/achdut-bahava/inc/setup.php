<?php
declare(strict_types=1);

function achdut_theme_setup(): void {
	load_theme_textdomain( 'achdut-bahava', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );
	add_theme_support( 'custom-logo', [
		'height'      => 60,
		'width'       => 220,
		'flex-width'  => true,
		'flex-height' => true,
	] );
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_theme_support( 'responsive-embeds' );

	add_image_size( 'hero-full', 1920, 800, true );
	add_image_size( 'card-thumb', 600, 400, true );

	register_nav_menus( [
		'primary'    => __( 'Primary Navigation', 'achdut-bahava' ),
		'footer-nav' => __( 'Footer Navigation', 'achdut-bahava' ),
	] );
}
add_action( 'after_setup_theme', 'achdut_theme_setup' );
