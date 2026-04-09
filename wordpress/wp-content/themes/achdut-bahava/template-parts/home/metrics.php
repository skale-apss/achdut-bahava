<section class="metrics-section section" aria-labelledby="metrics-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'Our Impact', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="metrics-title">
				<?php esc_html_e( 'How We Measure Success', 'achdut-bahava' ); ?>
			</h2>
		</div>

		<div class="metrics-grid">
			<?php
			$metrics = [
				[
					'icon'   => '👥',
					'target' => 0,
					'suffix' => '+',
					'label'  => __( 'Total Members (Ambassadors)', 'achdut-bahava' ),
				],
				[
					'icon'   => '🏘️',
					'target' => 0,
					'suffix' => '',
					'label'  => __( 'Total Groups', 'achdut-bahava' ),
				],
				[
					'icon'   => '📈',
					'target' => 0,
					'suffix' => '',
					'label'  => __( 'New Groups This Quarter', 'achdut-bahava' ),
				],
				[
					'icon'   => '🗺️',
					'target' => 0,
					'suffix' => '',
					'label'  => __( 'Cities Reached', 'achdut-bahava' ),
				],
				[
					'icon'   => '💬',
					'target' => 0,
					'suffix' => '+',
					'label'  => __( 'Perspectives Shifted', 'achdut-bahava' ),
				],
				[
					'icon'   => '🎉',
					'target' => 0,
					'suffix' => '+',
					'label'  => __( 'Shared Events', 'achdut-bahava' ),
				],
			];

			foreach ( $metrics as $metric ) :
			?>
			<div class="metric-card">
				<span style="font-size:var(--text-4xl); display:block; margin-block-end:var(--space-3);" aria-hidden="true">
					<?php echo esc_html( $metric['icon'] ); ?>
				</span>
				<span class="metric-card__number"
				      data-target="<?php echo esc_attr( (string) $metric['target'] ); ?>"
				      data-suffix="<?php echo esc_attr( $metric['suffix'] ); ?>">
					<?php echo esc_html( $metric['target'] . $metric['suffix'] ); ?>
				</span>
				<span class="metric-card__label"><?php echo esc_html( $metric['label'] ); ?></span>
			</div>
			<?php endforeach; ?>
		</div>

		<p class="text-center text-muted" style="margin-block-start:var(--space-8); font-size:var(--text-sm);">
			<?php esc_html_e( 'We are just getting started. Numbers update as new groups launch.', 'achdut-bahava' ); ?>
		</p>

	</div>
</section>
