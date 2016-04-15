<?php
/**
 * Plugin Name: TI Core Functions
 * Plugin URI:
 * Description: Functions that perform some core functionality that we would love to live inside of WordPress one day.
 * Author: Michael Bragg
 * Author URI:
 * Version: 0.1.0
 */

class TI_Core_Functions {

	/**
	 * Maintain the single instance of TI_Core_Functions
	 *
	 * @var bool
	 */
	private static $instance = false;

	/**
	 * Add required hooks
	 */
	function __construct() {

		add_action(
			'the_generator',
			array( $this, 'ti_remove_version_generator' )
		);

	}

	/**
	 * Handle requests for the instance.
	 *
	 * @return bool
	 */
	public static function get_instance() {
		if ( ! self::$instance )
			self::$instance = new TI_Core_Functions();
		return self::$instance;
	}

  /**
   * Remove version generator
   * @since 0.1.0
   */
  public function ti_remove_version_generator() {
		return false;
	}

}

function ti_core_functions_init() {
		TI_Core_Functions::get_instance();
}

add_action( 'plugins_loaded', 'ti_core_functions_init' );
