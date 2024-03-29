<?php
/**
 * Plugin Name:       S H Somrat's Post View Count Plugin
 * Plugin URI:        https://example.com/plugins/shs-post-view-count/
 * Description:       record the number of views a post has received
 * Version:           1.0.0
 * Author:            S H Somrat
 * Text Domain:       shs-post-view-count
 * Domain Path:       /languages
 *
 * @package shsom/shs-post-view-count
 */

// Include Composer autoload.
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Instantiate the main plugin class.
 */
class SHS_Post_View_Count {
	/**
	 * Constructor.
	 *
	 * Initializes the plugin.
	 */
	public function __construct() {
		// Initialize the Post_View_Count, Generate_Shortcode, Custom_Column classes and enqueue scripts.
		new Shsom\ShsPostViewCount\Post_View_Count();
		new Shsom\ShsPostViewCount\Generate_Shortcode();
		new Shsom\ShsPostViewCount\Custom_Column();
		new Shsom\ShsPostViewCount\SHS_Scripts();
	}
}

// Initialize the plugin.
new SHS_Post_View_Count();
