<section class="section section--surface" aria-labelledby="how-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'The Format', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="how-title">
				<?php esc_html_e( 'How Workshops Work', 'achdut-bahava' ); ?>
			</h2>
			<p class="section-header__text" style="margin-inline:auto">
				<?php esc_html_e( 'A structured, safe space for real dialogue — across every spectrum of Jewish life.', 'achdut-bahava' ); ?>
			</p>
		</div>

		<div class="grid grid--3">
			<?php
			$format = [
				[
					'icon'  => '🗓️',
					'title' => __( 'Weekly Meetings', 'achdut-bahava' ),
					'text'  => __( 'Every week, same time, same group. Consistency builds the trust that makes real dialogue possible.', 'achdut-bahava' ),
				],
				[
					'icon'  => '👥',
					'title' => __( 'Small Groups', 'achdut-bahava' ),
					'text'  => __( 'Groups of 8–15 people. Small enough for every voice to be heard. Diverse enough to challenge assumptions.', 'achdut-bahava' ),
				],
				[
					'icon'  => '📍',
					'title' => __( '100 Cities', 'achdut-bahava' ),
					'text'  => __( 'Growing across Israel and beyond. Find a group near you — or help us launch one in your city.', 'achdut-bahava' ),
				],
			];
			foreach ( $format as $item ) :
			?>
			<div class="card">
				<div class="card__body" style="text-align:center">
					<span style="font-size:var(--text-5xl); display:block; margin-block-end:var(--space-4);" aria-hidden="true">
						<?php echo esc_html( $item['icon'] ); ?>
					</span>
					<div class="card__title" style="text-align:center"><?php echo esc_html( $item['title'] ); ?></div>
					<p class="card__text"><?php echo esc_html( $item['text'] ); ?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
