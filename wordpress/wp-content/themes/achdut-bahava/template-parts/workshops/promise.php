<section class="section section--alt" aria-labelledby="promise-title">
	<div class="container container--narrow">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'Our Commitment', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="promise-title">
				<?php esc_html_e( 'The Meeting Promise', 'achdut-bahava' ); ?>
			</h2>
			<p class="section-header__text" style="margin-inline:auto">
				<?php esc_html_e( 'Read aloud at the opening of every workshop. These are not rules — they are our shared commitment to each other.', 'achdut-bahava' ); ?>
			</p>
		</div>

		<div style="display:flex; flex-direction:column; gap:var(--space-4);">
			<?php
			$promises = [
				__( 'We meet each week with the shared commitment to listen deeply, seek to understand with empathic curiosity, and speak respectfully, before seeking to be understood.', 'achdut-bahava' ),
				__( 'We honour our Value Pillars, which are explained in our meeting rules guide, ensuring the unwavering emotional safety and wellbeing for all.', 'achdut-bahava' ),
				__( 'We start and end on time. No one speaks for more than three minutes without yielding the floor, and no one interrupts another speaker.', 'achdut-bahava' ),
				__( 'We distinguish facts from opinions, we challenge others through questions, and speak through personal experience only. Personal perspective is not fact.', 'achdut-bahava' ),
				__( 'We all agree to hold ourselves and each other accountable to these promises so that every voice can be heard, and progress toward mutual respect and understanding can be made.', 'achdut-bahava' ),
			];

			foreach ( $promises as $i => $promise ) :
			?>
			<div class="promise-item">
				<span class="promise-item__number" aria-hidden="true"><?php echo esc_html( (string) ( $i + 1 ) ); ?></span>
				<p class="promise-item__text"><?php echo esc_html( $promise ); ?></p>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
