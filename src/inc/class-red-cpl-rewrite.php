<?php
/**
 * Logic for rewriting URL's as needed
 *
 * @package red-cpl
 */

namespace Garceau\Red_Custom_Post_Link\Inc;

/**
 * Red_CPL_Rewrite
 *
 * @class
 * @package red-cpl
 */
class Red_CPL_Rewrite {
	/**
	 * Set permalink for post to what is in the red_custom_post_link field.
	 *
	 * @param url     $link native link of post.
	 * @param WP_Post $post current WP_Post being processed.
	 */
	public function change_permalink_to_external_link( $link, $post ) {

		/* Bail early if ACF is not installed */
		if ( ! class_exists( 'ACF' ) ) {
			return;
		}

		$custom_link = get_field( 'red_custom_post_link', $post->ID );
		if ( $custom_link ) {
			$url  = esc_url( filter_var( $custom_link, FILTER_VALIDATE_URL ) );
			$link = $url ? $url : $link;
		}
		return $link;
	}
}
