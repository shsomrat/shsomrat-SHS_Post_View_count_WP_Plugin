<?php
/**
 * File containing the Custom_Column class
 *
 * @package shsom/shs-post-view-count
 */

namespace Shsom\ShsPostViewCount;

/**
 * Handles adding custom column for post view count.
 */
class Custom_Column {

	/**
	 * Constructor.
	 *
	 * Initializes the Custom_Column class.
	 */
	public function __construct() {
		// Hook into WordPress initialization.
		add_action( 'init', array( $this, 'init' ) );
	}

	/**
	 * Initialize the plugin.
	 */
	public function init() {
		// Add custom column for post view count.
		add_filter( 'manage_posts_columns', array( $this, 'add_view_count_column' ) );
		add_action( 'manage_posts_custom_column', array( $this, 'manage_view_count_column' ), 10, 2 );
		add_filter( 'manage_edit-post_sortable_columns', array( $this, 'add_sortable_column' ) );
	}

	/**
	 * Add custom column for post view count.
	 *
	 * @param array $columns Existing list of columns.
	 * @return array Modified list of columns.
	 */
	public function add_view_count_column( $columns ) {
		$new_columns = array();
		foreach ( $columns as $key => $value ) {
			$new_columns[ $key ] = $value;
			if ( $key == 'title' ) {
				$new_columns['view_count'] = 'View Count';
			}
		}
		return $new_columns;
	}

	/**
	 * Manage the content of custom column for post view count.
	 *
	 * @param string $column  Current column name being rendered.
	 * @param int    $post_id Current post ID.
	 */
	public function manage_view_count_column( $column, $post_id ) {
		if ( $column == 'view_count' ) {
			$view_count = get_post_meta( $post_id, 'post_views_count', true );
			$view_count = $view_count ? $view_count : 0;
			echo $view_count;
		}
	}

	/**
	 * Add sorting capability to custom column.
	 *
	 * @param array $columns Existing list of sortable columns.
	 * @return array Modified list of sortable columns.
	 */
	public function add_sortable_column( $columns ) {
		$columns['id']         = 'ID';
		$columns['view_count'] = 'View Count';
		return $columns;
	}
}
