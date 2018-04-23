<?php
/*
Plugin Name: CPO Companion
Description: Creates Post Types, Shortcodes and Widgets in order to create a powerful business website.
Author: CPOThemes
Version: 1.0.1
Author URI: http://www.cpothemes.com
*/

define( 'CPO_COMPANION_ASSETS', plugins_url( 'assets/', __FILE__ ) );
define( 'CPO_COMPANION_PATH', plugin_dir_path( __FILE__ ) );

require CPO_COMPANION_PATH . 'includes/functions.php';

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require CPO_COMPANION_PATH . 'includes/class-cpo-companion.php';

function run_cpo_companion() {
	$plugin = new CPO_Companion();
}
run_cpo_companion();
