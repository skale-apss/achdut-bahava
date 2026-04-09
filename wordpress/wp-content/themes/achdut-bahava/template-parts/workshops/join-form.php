<section class="join-form-section section" id="join" aria-labelledby="join-title">
	<div class="container">

		<div class="section-header text-center">
			<span class="section-header__eyebrow"><?php esc_html_e( 'Take the First Step', 'achdut-bahava' ); ?></span>
			<h2 class="section-header__title" id="join-title">
				<?php esc_html_e( 'Reserve Your Spot', 'achdut-bahava' ); ?>
			</h2>
			<p class="section-header__text" style="margin-inline:auto">
				<?php esc_html_e( 'Tell us a little about yourself and we\'ll connect you with the right group in your area.', 'achdut-bahava' ); ?>
			</p>
		</div>

		<div class="form-card">
			<?php
			// Use Contact Form 7 shortcode if plugin is active
			if ( function_exists( 'wpcf7_contact_form' ) ) {
				// Replace 'YOUR_CF7_ID' with the actual CF7 form ID after creation
				echo do_shortcode( '[contact-form-7 id="workshop-signup" title="Workshop Sign-up"]' );
			} else {
				// Fallback HTML form
				?>
				<form class="workshop-form" method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
					<?php wp_nonce_field( 'workshop_signup', 'workshop_nonce' ); ?>
					<input type="hidden" name="action" value="workshop_signup">

					<div class="grid grid--2" style="gap:var(--space-4)">
						<div class="form-group">
							<label class="form-label" for="ws-name"><?php esc_html_e( 'Full Name *', 'achdut-bahava' ); ?></label>
							<input class="form-input" type="text" id="ws-name" name="name" required autocomplete="name">
						</div>
						<div class="form-group">
							<label class="form-label" for="ws-email"><?php esc_html_e( 'Email Address *', 'achdut-bahava' ); ?></label>
							<input class="form-input" type="email" id="ws-email" name="email" required autocomplete="email">
						</div>
					</div>

					<div class="grid grid--2" style="gap:var(--space-4)">
						<div class="form-group">
							<label class="form-label" for="ws-phone"><?php esc_html_e( 'Phone', 'achdut-bahava' ); ?></label>
							<input class="form-input" type="tel" id="ws-phone" name="phone" autocomplete="tel">
						</div>
						<div class="form-group">
							<label class="form-label" for="ws-city"><?php esc_html_e( 'City / Area', 'achdut-bahava' ); ?></label>
							<input class="form-input" type="text" id="ws-city" name="city">
						</div>
					</div>

					<div class="form-group">
						<label class="form-label" for="ws-message"><?php esc_html_e( 'What brings you here?', 'achdut-bahava' ); ?></label>
						<textarea class="form-textarea" id="ws-message" name="message" rows="4"></textarea>
					</div>

					<div class="form-group">
						<label class="form-checkbox">
							<input type="checkbox" name="gdpr_consent" required>
							<span>
								<?php esc_html_e( 'I agree to receive updates from Achdut B\'Ahavah. We will never share your information.', 'achdut-bahava' ); ?>
								<?php esc_html_e( '/ אני מסכים/ה לקבל עדכונים מאחדות באהבה.', 'achdut-bahava' ); ?>
							</span>
						</label>
					</div>

					<button type="submit" class="btn btn--primary btn--lg" style="width:100%">
						<?php esc_html_e( 'Reserve My Spot', 'achdut-bahava' ); ?>
					</button>
				</form>
				<?php
			}
			?>
		</div>

	</div>
</section>
