<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://smartarget.online
 * @since      1.2
 *
 * @package    Smartarget
 * @subpackage Smartarget/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.2
 * @package    Smartarget
 * @subpackage Smartarget/includes
 * @author     Erez <erezson@gmail.com >
 */
class SmartargetButtonBuilder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.2
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'smartarget_button_builder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
