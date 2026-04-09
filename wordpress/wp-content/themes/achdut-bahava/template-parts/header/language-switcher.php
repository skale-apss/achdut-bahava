<?php
if ( ! function_exists( 'pll_the_languages' ) ) {
	return;
}
?>
<nav class="language-switcher" aria-label="<?php esc_attr_e( 'Select language', 'achdut-bahava' ); ?>">
	<ul class="lang-list">
		<?php
		pll_the_languages( [
			'show_flags'       => 0,
			'show_names'       => 1,
			'display_names_as' => 'name',
			'hide_current'     => 0,
			'echo'             => 1,
		] );
		?>
	</ul>
</nav>
