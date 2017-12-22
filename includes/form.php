<?php
	if( isset( $_POST["first_name"] ) && isset( $_POST["request_text"] ) ) {
		$first_name = sanitize_text_field( $_POST["first_name"] );
		$request_text = sanitize_textarea_field( $_POST["request_text"] );
		$site_name = sanitize_text_field( get_bloginfo( 'name' ) );
		$site_url = esc_url( site_url() );
		if ( isset( $_POST["phone_number"] ) ) {
			$phone_number = sanitize_text_field( $_POST["phone_number"] );
		}
		if ( isset( $_POST["client_email"] ) ) {
			$client_email = sanitize_email( $_POST["client_email"] );
		}

		if (
		wp_mail( 'derrickgilliland0@gmail.com', "Help Request from " . sanitize_text_field( $site_name ), '
		First name: ' . sanitize_text_field( $first_name ) . '
		Site URL: ' . esc_url( $site_url ) . '
		Email: ' . sanitize_email( $client_email ) . '
		Phone: ' . sanitize_text_field( $phone_number ) . '
		Help Request: ' . esc_textarea( $request_text ) ) ) {
			echo '<span class="success">Thank you, ' . sanitize_text_field( $first_name ) .
			'. Your message has been sent! We will respond as soon as possible.
			If you do not hear from us within 3-5 business days, please either write us at
			additionweb@mail.com or call us at (740)-577-1281. We look forward to helping you!</span>';
			$success = true;
		} else {
			echo '<span class="error">There has been an error sending the message! Please try again.
			If the message continues to fail sending, please email us directly at
			additionweb@mail.com</span>';
			$error = true;
		}
	}; ?>
<style>
	.success {
		color: green;
	}
	.error {
		color: red;
	}
</style>
<?php if ( $success != true && $error != true ) { ?>
	<h3>Need help? Just fill out the form below and we'll be on it!</h3>
<?php } ?>
<form action="" method="post">

		<ul class="form-style-1">
    <li>
			<label>First name*:</label>
			<input type="text" name="first_name" required="true"><br>
		</li>
    <li>
			<label>Email*:</label>
			<input type="text" name="client_email" required="true"><br>
    </li>
    <li>
			<label>Phone number (Optional):</label>
			<input type="text" name="phone_number"><br>
    </li>
		<li>
			<label>Request*:</label>
			<textarea name="request_text" rows="5" required="true"></textarea><br>
		</li>
    <li>
          <input type="submit" value="Submit Help Request">
    </li>
</ul>
</form>
