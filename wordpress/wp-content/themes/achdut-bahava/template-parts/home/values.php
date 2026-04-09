<section class="values-section section" aria-labelledby="values-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow" style="color:var(--color-accent)">
				<?php esc_html_e( 'Core Values', 'achdut-bahava' ); ?>
			</span>
			<h2 class="section-header__title text-inverse" id="values-title">
				<?php esc_html_e( 'Our Value Pillars', 'achdut-bahava' ); ?>
			</h2>
			<p class="section-header__text text-inverse" style="opacity:0.75; margin-inline:auto">
				<?php esc_html_e( 'These pillars are explained in our meeting rules guide, ensuring the unwavering emotional safety and wellbeing for all.', 'achdut-bahava' ); ?>
			</p>
		</div>

		<div class="grid grid--5">
			<?php
			$pillars = [
				[
					'icon'  => '🛡️',
					'title' => __( 'Emotional Safety', 'achdut-bahava' ),
					'text'  => __( 'Every voice is honoured in a space where vulnerability is protected.', 'achdut-bahava' ),
				],
				[
					'icon'  => '🤝',
					'title' => __( 'Mutual Respect', 'achdut-bahava' ),
					'text'  => __( 'We honour each person\'s path, regardless of where they stand.', 'achdut-bahava' ),
				],
				[
					'icon'  => '🔍',
					'title' => __( 'Seek to Understand', 'achdut-bahava' ),
					'text'  => __( 'We listen with empathic curiosity before seeking to be understood.', 'achdut-bahava' ),
				],
				[
					'icon'  => '⚖️',
					'title' => __( 'Shared Accountability', 'achdut-bahava' ),
					'text'  => __( 'We hold ourselves and each other to our collective promises.', 'achdut-bahava' ),
				],
				[
					'icon'  => '💡',
					'title' => __( 'Facts Over Opinions', 'achdut-bahava' ),
					'text'  => __( 'We distinguish facts from opinions and speak through personal experience only.', 'achdut-bahava' ),
				],
			];

			foreach ( $pillars as $pillar ) :
			?>
			<div class="pillar-card">
				<span class="pillar-card__icon" aria-hidden="true"><?php echo esc_html( $pillar['icon'] ); ?></span>
				<div class="pillar-card__title"><?php echo esc_html( $pillar['title'] ); ?></div>
				<p class="pillar-card__text"><?php echo esc_html( $pillar['text'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
