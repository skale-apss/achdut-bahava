<section class="tracks-section section" id="tracks" aria-labelledby="tracks-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'Stronger Together', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="tracks-title">
				<?php esc_html_e( 'Discover Your Path', 'achdut-bahava' ); ?>
			</h2>
			<p class="section-header__text" style="margin-inline:auto">
				<?php esc_html_e( 'Diverse opportunities to connect, learn, and make a difference. Four engagement tracks designed to foster community and drive meaningful change.', 'achdut-bahava' ); ?>
			</p>
		</div>

		<div class="grid grid--4">
			<?php
			$tracks = [
				[
					'icon'  => '🤝',
					'title' => __( 'Social Events', 'achdut-bahava' ),
					'text'  => __( 'Connecting with Israel together — shared experiences that build real bonds across communities.', 'achdut-bahava' ),
					'cta'   => __( 'Explore Events', 'achdut-bahava' ),
					'href'  => home_url( '/#contact' ),
				],
				[
					'icon'  => '🇮🇱',
					'title' => __( 'Impact', 'achdut-bahava' ),
					'text'  => __( 'Helping Israeli society — direct action projects that strengthen the fabric of our shared home.', 'achdut-bahava' ),
					'cta'   => __( 'Make an Impact', 'achdut-bahava' ),
					'href'  => home_url( '/#contact' ),
				],
				[
					'icon'  => '📚',
					'title' => __( 'Education', 'achdut-bahava' ),
					'text'  => __( 'Learning together — exploring our shared history, traditions, and diverse paths through structured study.', 'achdut-bahava' ),
					'cta'   => __( 'Start Learning', 'achdut-bahava' ),
					'href'  => home_url( '/#contact' ),
				],
				[
					'icon'  => '🌍',
					'title' => __( 'Ambassador Program', 'achdut-bahava' ),
					'text'  => __( 'For those passionate about advancing our mission — help establish new groups and expand our reach.', 'achdut-bahava' ),
					'cta'   => __( 'Become an Ambassador', 'achdut-bahava' ),
					'href'  => home_url( '/workshops/' ),
				],
			];

			foreach ( $tracks as $track ) :
			?>
			<div class="track-card">
				<span class="track-card__icon" aria-hidden="true"><?php echo esc_html( $track['icon'] ); ?></span>
				<div class="track-card__title"><?php echo esc_html( $track['title'] ); ?></div>
				<p class="track-card__text"><?php echo esc_html( $track['text'] ); ?></p>
				<a href="<?php echo esc_url( $track['href'] ); ?>" class="btn btn--outline btn--sm">
					<?php echo esc_html( $track['cta'] ); ?>
				</a>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
