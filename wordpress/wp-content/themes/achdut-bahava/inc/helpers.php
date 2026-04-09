<?php
declare(strict_types=1);

/**
 * Detect if the current page should render RTL.
 * Polylang-aware: checks the active language locale.
 */
function achdut_is_rtl_page(): bool {
	if ( function_exists( 'pll_current_language' ) ) {
		$locale = pll_current_language( 'locale' );
		return in_array( $locale, [ 'he_IL', 'ar' ], true );
	}
	return is_rtl();
}

/**
 * Return the 2-letter ISO language slug for the current page.
 */
function achdut_current_lang(): string {
	if ( function_exists( 'pll_current_language' ) ) {
		return pll_current_language( 'slug' ) ?: 'he';
	}
	return substr( get_locale(), 0, 2 );
}

/**
 * Output dir and lang attributes for the <html> element.
 */
function achdut_html_attrs(): void {
	$dir  = achdut_is_rtl_page() ? 'rtl' : 'ltr';
	$lang = achdut_current_lang();
	echo 'dir="' . esc_attr( $dir ) . '" lang="' . esc_attr( $lang ) . '"';
}

/**
 * Add language and direction body classes.
 *
 * @param string[] $classes
 * @return string[]
 */
function achdut_body_classes( array $classes ): array {
	$lang       = achdut_current_lang();
	$classes[]  = 'lang-' . sanitize_html_class( $lang );
	$classes[]  = achdut_is_rtl_page() ? 'rtl-layout' : 'ltr-layout';
	return $classes;
}
add_filter( 'body_class', 'achdut_body_classes' );
