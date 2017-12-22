<?php

// Functions that output the contents of the dashboard widgets
function addition_dashboard_welcome_widget( $post, $callback_args ) {
	echo "Welcome to your church website! We'd like to thank you
   for choosing AdditionWeb as your web partner.
   If you need any assistance, please do not hesitate to use the
	 contact form to contact us! You may also reach us at (740)-577-1281.";
}

function addition_dashboard_contact_widget( $post, $callback_args ) {
	include( 'includes/form.php' );
}

function addition_dashboard_remember_widget( $post, $callback_args ) {
	echo "<h3>Please remember the following advice!</h3>
				<p>1) Some features are maintained by third parties.</p>
				<p>2) AdditionWeb does not endorse the purchase of additional features
				for the plugins that have been included with your website.
				If you choose to purchase additional features for plugins that are
				maintained by third parties, it is advisable that you first contact
				AdditionWeb, because a staff member is required to configure plugins.</p>";
}

// Function used in the action hook
function addition_add_dashboard_widgets() {
	wp_add_dashboard_widget('addition_dashboard_welcome_widget', 'Welcome', 'addition_dashboard_welcome_widget');
  wp_add_dashboard_widget('addition_dashboard_contact_widget', 'Contact', 'addition_dashboard_contact_widget');
	wp_add_dashboard_widget('addition_dashboard_remember_widget', 'Important Information', 'addition_dashboard_remember_widget');

}

// Register the new dashboard widget with the 'wp_dashboard_setup' action
add_action('wp_dashboard_setup', 'addition_add_dashboard_widgets' );
