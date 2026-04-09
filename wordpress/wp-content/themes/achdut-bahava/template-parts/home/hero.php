<section class="hero" aria-labelledby="hero-title">
	<div class="hero__bg" aria-hidden="true"></div>

	<div class="hero__content">
		<span class="hero__eyebrow"><?php esc_html_e( 'אחדות באהבה · Unity in Love', 'achdut-bahava' ); ?></span>

		<h1 class="hero__title" id="hero-title">
			<?php esc_html_e( 'Become the solution', 'achdut-bahava' ); ?>
		</h1>

		<p class="hero__subtitle">
			<?php esc_html_e( 'Changing hearts and minds — without compromising on your values', 'achdut-bahava' ); ?>
		</p>

		<div class="hero__ctas">
			<a href="<?php echo esc_url( home_url( '/workshops/' ) ); ?>"
			   class="btn btn--primary btn--lg">
				<?php esc_html_e( 'Join a Workshop', 'achdut-bahava' ); ?>
			</a>
			<a href="#tracks"
			   class="btn btn--secondary btn--lg">
				<?php esc_html_e( 'Get Involved', 'achdut-bahava' ); ?>
			</a>
		</div>

		<a href="<?php echo esc_url( home_url( '/donate/' ) ); ?>" class="hero__donate-link">
			<?php esc_html_e( 'Donate →', 'achdut-bahava' ); ?>
		</a>
	</div>

	<div class="hero__scroll" aria-hidden="true">
		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M10 4v12M4 10l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	</div>
</section>
