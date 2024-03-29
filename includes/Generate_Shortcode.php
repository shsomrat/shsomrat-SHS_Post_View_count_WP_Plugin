<?php
/**
 * File containing the Generate_Shortcode class
 *
 * @package shsom/shs-post-view-count
 */

namespace Shsom\ShsPostViewCount;

/**
 * Handles generating shortcode for post view count.
 */
class Generate_Shortcode {

	/**
	 * Constructor.
	 *
	 * Initializes the Generate_Shortcode class.
	 */
	public function __construct() {
		// Hook into WordPress initialization.
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Initialize the shortcode.
	 */
	public function init() {
		// Register shortcode for post view count.
		add_shortcode( 'post_view_count', array( $this, 'shortcode_view_count' ) );
	}

	/**
	 * Shortcode callback function.
	 *
	 * @param array $atts Shortcode attributes.
	 * @return string Post view count HTML.
	 */
	public function shortcode_view_count( $atts ) {
		// Set default attribute values.
		$atts = shortcode_atts(
			array(
				'post_id' => get_the_ID(),
			),
			$atts,
			'post_view_count'
		);

		// Create an instance of the Post_View_Count class.
		$post_view_count = new Post_View_Count();

		// Return the post view count for the specified post ID.
		$count_data = $post_view_count->get_post_view_count( $atts['post_id'] );
		return "<div id='views-content'><h3 id='views-title'>post views</h3><p id='views-text'>Total views</p><div id='views-count'>{$count_data}</div></div>";
	}
}
