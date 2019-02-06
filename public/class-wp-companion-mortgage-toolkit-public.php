<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wpcompanion.io/
 * @since      1.0.0
 *
 * @package    Wp_Companion_Mortgage_Toolkit
 * @subpackage Wp_Companion_Mortgage_Toolkit/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Wp_Companion_Mortgage_Toolkit
 * @subpackage Wp_Companion_Mortgage_Toolkit/public
 * @author     Imanuel Gittens <info@wpcompanion.io>
 */
class Wp_Companion_Mortgage_Toolkit_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Companion_Mortgage_Toolkit_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Companion_Mortgage_Toolkit_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/wp-companion-mortgage-toolkit-public.css', array(), $this->version, 'all');
		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/bootstrap/css/bootstrap.min.css', array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Wp_Companion_Mortgage_Toolkit_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Wp_Companion_Mortgage_Toolkit_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/wp-companion-mortgage-toolkit-public.js', array('jquery'), $this->version, false);

	}

	public function define_mortgage_calculator_shortcode($atts) {
		return '
		<div id="wp-companion-mortgage-toolkit" class="wp-companion-mortgage-wrapper">
			<div class="wp-companion-mortgage__calculator">
				<form class="wp-companion-mortgage__calculator-form">
					<input type="text" placeholder="Enter amount you wish to borrow"/>
					<select>
						<option value="5">5</option>
						<option value="10">10</option>
						<option value="15">15</option>
						<option value="20">20</option>
						<option value="25">25</option>
						<option value="30">30</option>
					</select>
					<input type="text" placeholder="Enter the rate"/>
					<input type="text" placeholder="Enter a downpayment (if applicable)"/>
					<input type="submit" value="Calculate Monthly Payment"/>
				</form>
			</div>
		</div>
	';
	}

}
