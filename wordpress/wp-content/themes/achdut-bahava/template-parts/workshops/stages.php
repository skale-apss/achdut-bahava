<section class="stages-section section" aria-labelledby="stages-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'The Journey', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="stages-title">
				<?php esc_html_e( 'Achdut as a Journey', 'achdut-bahava' ); ?>
			</h2>
			<p class="section-header__text" style="margin-inline:auto">
				<?php esc_html_e( 'We have identified several stages people move through in relation to others\' perspectives. Where are you on the journey?', 'achdut-bahava' ); ?>
			</p>
		</div>

		<div class="stages-track" role="list">
			<?php
			$stages = [
				[ 'num' => '1', 'label' => __( 'Frustration', 'achdut-bahava' ),    'desc' => __( 'Where many begin — feeling misunderstood and unheard.', 'achdut-bahava' ) ],
				[ 'num' => '2', 'label' => __( 'Understanding', 'achdut-bahava' ),   'desc' => __( 'Beginning to grasp why others hold their perspectives.', 'achdut-bahava' ) ],
				[ 'num' => '3', 'label' => __( 'Appreciation', 'achdut-bahava' ),    'desc' => __( 'Recognising the validity and depth of different views.', 'achdut-bahava' ) ],
				[ 'num' => '4', 'label' => __( 'Value', 'achdut-bahava' ),           'desc' => __( 'Actively valuing what diversity of thought brings.', 'achdut-bahava' ) ],
				[ 'num' => '5', 'label' => __( 'Love', 'achdut-bahava' ),            'desc' => __( 'Genuine affinity and care for those who see the world differently.', 'achdut-bahava' ) ],
				[ 'num' => '6', 'label' => __( 'Sharing with Others', 'achdut-bahava' ), 'desc' => __( 'Becoming an ambassador — spreading unity beyond the workshop.', 'achdut-bahava' ) ],
			];

			foreach ( $stages as $stage ) :
			?>
			<div class="stage-item" role="listitem">
				<div class="stage-item__dot" title="<?php echo esc_attr( $stage['desc'] ); ?>">
					<?php echo esc_html( $stage['num'] ); ?>
				</div>
				<div class="stage-item__label"><?php echo esc_html( $stage['label'] ); ?></div>
			</div>
			<?php endforeach; ?>
		</div>

	</div>
</section>
