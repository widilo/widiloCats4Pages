<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://muennecke-vollmers.de
 * @since      1.0.0
 *
 * @package    Widilo_Cats4pages
 * @subpackage Widilo_Cats4pages/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Widilo_Cats4pages
 * @subpackage Widilo_Cats4pages/includes
 * @author     Heike Vollmers, Münnecke & Vollmers GbR <info@widilo.de>
 */
class Widilo_Cats4pages_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'widilo-cats4pages',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
