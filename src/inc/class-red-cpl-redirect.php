<?php
/**
 * Logic for redirecting URL's as needed
 *
 * @package red-cpl
 */

namespace Garceau\Red_Custom_Post_Link\Inc;

/**
 * Red_CPL_Redirect
 *
 * @class
 * @package red-cpl
 */
class Red_CPL_Redirect {

	/**
	 * Fallback for old URL's. Redirects posts that have an external link to the external link instead of the post page.
	 */
	public function redirect_external_url_posts() {

		/* Bail early if ACF is not installed */
		if ( ! class_exists( 'ACF' ) || is_archive() ) {
			return;
		}

		global $post;

		$custom_link = get_field( 'red_custom_post_link', $post->ID );
		if ( $custom_link ) {
			$url = esc_url( filter_var( $custom_link, FILTER_VALIDATE_URL ) );
			$url = $url ? $url : get_site_url();
			exit( wp_redirect( esc_url_raw( $url ) ) );
		}

	}

}
