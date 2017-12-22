<?php
/*
Plugin Name: Addition Core
GitHub Plugin URI: AdditionWeb/Addition-Core
Description: Sets up additional widgets and tweaks for AdditionWeb partners
Version:     1.0.0
Author:      AdditionWeb
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

include( 'dashboard.php' );
include( 'includes/calendar-tweak.php' );
include( 'includes/subplugins/addition-fancy-admin-ui/addition-fancy-admin-ui.php' );

// Add Custom CSS Styles
wp_enqueue_style( 'addition-core-styles', plugins_url() . '/addition-core/css/style.css'
);


?>
