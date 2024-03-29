<?php
/**
 * File containing the SHS_Scripts class
 *
 * This class handles loading CSS and JavaScript files for the plugin.
 *
 * @package shsom/shs-post-view-count
 */

namespace Shsom\ShsPostViewCount;

/**
 * Handles loading CSS and JavaScript files for the plugin.
 */
class SHS_Scripts {

	/**
	 * Constructor.
	 *
	 * Initializes the SHS_Scripts class.
	 */
	public function __construct() {
		// Hook into WordPress initialization.
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Initialize the plugin.
	 */
	public function init() {
    // Hook into WordPress initialization.
    add_action( 'wp_enqueue_scripts', array( $this, 'load_assets' ) );
	}


	/**
	 * Load CSS and JavaScript files.
	 */
	public function load_assets() {
		// Enqueue CSS file.
		wp_enqueue_style( 'shs-post-view-count-style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css', array(), '1.0.0', 'all' );

		// Enqueue JavaScript file.
		// wp_enqueue_script( 'shs-post-view-count-script', plugin_dir_url( __FILE__ ) . 'assets/js/script.js', array( 'jquery' ), '1.0.0', true );
	}
}
