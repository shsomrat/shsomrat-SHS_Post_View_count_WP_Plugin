<?php
/**
 * File containing the Post_View_Count class
 *
 * @package shsom/shs-post-view-count
 */

namespace Shsom\ShsPostViewCount;

/**
 * Handles tracking and displaying post view counts.
 */
class Post_View_Count {

	/**
	 * Constructor.
	 *
	 * Initializes the Post_View_Count class.
	 */
	public function __construct() {
		// Hook into WordPress initialization.
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Initialize the plugin.
	 */
	public function init() {
		// Hook into WordPress to track post views and display view count.
		add_action( 'wp_head', array( $this, 'track_post_views' ) );
	}

	/**
	 * Function to increment view count.
	 */
	public function track_post_views() {
		// Check if it's a single post.
		if ( ! is_single() ) {
			return;
		}
		// Get the current post object.
		global $post;
		// Increment the view count for the current post.
		$this->set_post_view_count( $post->ID );
	}

	/**
	 * Function to get view count.
	 *
	 * @param int $post_id Post ID.
	 * @return string View count formatted with 'Views'.
	 */
	public function get_post_view_count( $post_id ) {
		$count_key = 'post_views_count';
		$count     = get_post_meta( $post_id, $count_key, true );
		if ( $count == '' ) {
			// If count is not set, initialize it to 0.
			delete_post_meta( $post_id, $count_key );
			add_post_meta( $post_id, $count_key, '0' );
			return '0';
		}
		return $count;
	}

	/**
	 * Function to set view count.
	 *
	 * @param int $post_id Post ID.
	 */
	private function set_post_view_count( $post_id ) {
		$count_key = 'post_views_count';
		$count     = get_post_meta( $post_id, $count_key, true );
		if ( $count == '' ) {
			// If count is not set, initialize it to 1.
			$count = 0;
			delete_post_meta( $post_id, $count_key );
			add_post_meta( $post_id, $count_key, '1' );
		} else {
			// Increment the count by 1.
			++$count;
			update_post_meta( $post_id, $count_key, $count );
		}
	}
}
