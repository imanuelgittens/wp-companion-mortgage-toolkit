<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpcompanion.io/
 * @since      1.0.0
 *
 * @package    Wp_Companion_Mortgage_Toolkit
 * @subpackage Wp_Companion_Mortgage_Toolkit/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Companion_Mortgage_Toolkit
 * @subpackage Wp_Companion_Mortgage_Toolkit/includes
 * @author     Imanuel Gittens <info@wpcompanion.io>
 */
class Wp_Companion_Mortgage_Toolkit_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-companion-mortgage-toolkit',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
