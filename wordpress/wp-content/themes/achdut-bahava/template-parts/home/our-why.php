<section class="our-why section" aria-labelledby="why-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'Our Why', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="why-title">
				<?php esc_html_e( 'Why This Matters', 'achdut-bahava' ); ?>
			</h2>
		</div>

		<div class="why-grid">
			<?php
			$reasons = [
				[
					'number' => '01',
					'text'   => __( 'Impact generations to come', 'achdut-bahava' ),
				],
				[
					'number' => '02',
					'text'   => __( 'Your home where your perspective can be heard and understood', 'achdut-bahava' ),
				],
				[
					'number' => '03',
					'text'   => __( 'Get passionate about the same things', 'achdut-bahava' ),
				],
				[
					'number' => '04',
					'text'   => __( 'Become part of the solution', 'achdut-bahava' ),
				],
				[
					'number' => '05',
					'text'   => __( 'Because if we don\'t — the cost is too high', 'achdut-bahava' ),
				],
			];

			foreach ( $reasons as $reason ) :
			?>
			<div class="why-card">
				<span class="why-card__number" aria-hidden="true"><?php echo esc_html( $reason['number'] ); ?></span>
				<p class="why-card__text"><?php echo esc_html( $reason['text'] ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
