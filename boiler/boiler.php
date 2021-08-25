<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://onlinewebtutorhub.blogspot.in/
 * @since             1.0.0
 * @package           Boiler
 *
 * @wordpress-plugin
 * Plugin Name:       Boilerplate
 * Plugin URI:        http://onlinewebtutorhub.blogspot.in/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            PU
 * Author URI:        http://onlinewebtutorhub.blogspot.in/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       boiler
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if(!defined("OWT_BOILER_PLAGIN_DIR")){
	define("OWT_BOILER_PLAGIN_DIR",plugin_dir_path(__FILE__));
}
if(!defined("OWT_BOILER_PLAGIN_URL")){
	//define("OWT_BOILER_PLAGIN_URL",plugin_url()."/owt-boiler");
}
define('BOILERPLATE_PLUGIN_PATH',plugin_dir_path(__FILE__));


/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'BOILER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-boiler-activator.php
 */
function activate_boiler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boiler-activator.php';
	$activator = new Boiler_Activator();
	$activator->activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-boiler-deactivator.php
 */
function deactivate_boiler() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-boiler-deactivator.php';
	Boiler_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_boiler' );
register_deactivation_hook( __FILE__, 'deactivate_boiler' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-boiler.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_boiler() {

	$plugin = new Boiler();
	$plugin->run();

}
run_boiler();
