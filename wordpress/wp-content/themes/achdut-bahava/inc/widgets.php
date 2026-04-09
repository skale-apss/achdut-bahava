<?php
declare(strict_types=1);

function achdut_register_widgets(): void {
	register_sidebar( [
		'name'          => __( 'Footer Widget Area', 'achdut-bahava' ),
		'id'            => 'footer-widgets',
		'description'   => __( 'Add widgets here to appear in the footer.', 'achdut-bahava' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	] );
}
add_action( 'widgets_init', 'achdut_register_widgets' );
