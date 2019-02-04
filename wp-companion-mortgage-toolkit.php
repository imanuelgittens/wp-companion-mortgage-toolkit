<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpcompanion.io/
 * @since             1.0.0
 * @package           Wp_Companion_Mortgage_Toolkit
 *
 * @wordpress-plugin
 * Plugin Name:       WP Companion Mortgage Toolkit
 * Plugin URI:        https://wpcompanion.io/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Imanuel Gittens
 * Author URI:        https://wpcompanion.io/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-companion-mortgage-toolkit
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-companion-mortgage-toolkit-activator.php
 */
function activate_wp_companion_mortgage_toolkit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-companion-mortgage-toolkit-activator.php';
	Wp_Companion_Mortgage_Toolkit_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-companion-mortgage-toolkit-deactivator.php
 */
function deactivate_wp_companion_mortgage_toolkit() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-companion-mortgage-toolkit-deactivator.php';
	Wp_Companion_Mortgage_Toolkit_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_companion_mortgage_toolkit' );
register_deactivation_hook( __FILE__, 'deactivate_wp_companion_mortgage_toolkit' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-companion-mortgage-toolkit.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_companion_mortgage_toolkit() {

	$plugin = new Wp_Companion_Mortgage_Toolkit();
	$plugin->run();

}
run_wp_companion_mortgage_toolkit();
