<?php
declare(strict_types=1);

function achdut_enqueue_assets(): void {
	$uri     = get_template_directory_uri();
	$version = wp_get_theme()->get( 'Version' );

	// Preconnect hints (output before wp_head enqueues fonts)
	add_action( 'wp_head', static function (): void {
		echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
		echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
	}, 1 );

	// Google Fonts — Noto superfamily: covers Hebrew, Latin, Cyrillic
	wp_enqueue_style(
		'achdut-fonts',
		'https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,300;0,400;0,600;1,400&family=Noto+Sans+Hebrew:wght@300;400;600&family=Noto+Serif:ital,wght@0,600;0,700;1,600&family=Noto+Serif+Hebrew:wght@600;700&display=swap',
		[],
		null
	);

	// Main stylesheet
	wp_enqueue_style(
		'achdut-main',
		$uri . '/assets/css/main.css',
		[ 'achdut-fonts' ],
		$version
	);

	// RTL stylesheet — only loaded when the active language is RTL
	if ( achdut_is_rtl_page() ) {
		wp_enqueue_style(
			'achdut-rtl',
			$uri . '/assets/css/rtl.css',
			[ 'achdut-main' ],
			$version
		);
	}

	// Navigation JS
	wp_enqueue_script(
		'achdut-navigation',
		$uri . '/assets/js/navigation.js',
		[],
		$version,
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);

	// Main JS
	wp_enqueue_script(
		'achdut-main',
		$uri . '/assets/js/main.js',
		[ 'achdut-navigation' ],
		$version,
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);

	// Pass PHP state to JS
	wp_localize_script( 'achdut-main', 'achdutData', [
		'currentLang' => achdut_current_lang(),
		'isRTL'       => achdut_is_rtl_page(),
		'homeUrl'     => esc_url( home_url( '/' ) ),
		'strings'     => [
			'menuOpen'  => __( 'Open menu', 'achdut-bahava' ),
			'menuClose' => __( 'Close menu', 'achdut-bahava' ),
		],
	] );
}
add_action( 'wp_enqueue_scripts', 'achdut_enqueue_assets' );
