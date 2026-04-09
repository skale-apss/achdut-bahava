<?php
declare(strict_types=1);

/**
 * Output hreflang alternate link tags for SEO.
 */
function achdut_hreflang_links(): void {
	if ( ! function_exists( 'pll_the_languages' ) ) {
		return;
	}

	$translations = pll_the_languages( [ 'raw' => 1 ] );
	if ( empty( $translations ) ) {
		return;
	}

	foreach ( $translations as $lang ) {
		printf(
			'<link rel="alternate" hreflang="%s" href="%s">' . "\n",
			esc_attr( $lang['locale'] ),
			esc_url( $lang['url'] )
		);
	}

	// x-default points to the Hebrew (primary) version
	$default = $translations['he'] ?? reset( $translations );
	printf(
		'<link rel="alternate" hreflang="x-default" href="%s">' . "\n",
		esc_url( $default['url'] )
	);
}
add_action( 'wp_head', 'achdut_hreflang_links' );
