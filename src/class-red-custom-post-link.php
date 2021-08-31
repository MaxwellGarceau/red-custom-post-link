<?php
/**
 * Class that initializes plugin
 *
 * @package red-cpl
 */

namespace Garceau\Red_Custom_Post_Link;

use Garceau\Red_Custom_Post_Link\Inc\{ Red_CPL_Rewrite, Red_CPL_Redirect };
use Garceau\Red_Custom_Post_Link\Admin\{ Red_CPL_ACF, Red_CPL_Admin_Notice };

/**
 * Red_Custom_Post_Link
 *
 * @class
 * @package red-cpl
 */
class Red_Custom_Post_Link {

	/**
	 * Initialize plugin
	 */
	public function init() {
		$this->hooks();
	}

	/**
	 * Register all hooks here
	 */
	public function hooks() {

		/**
		 * Red_CPL_Rewrite
		 */
		$red_cpl_rewrite = new Red_CPL_Rewrite();

		/* Default WP Posts */
		add_filter( 'post_link', array( $red_cpl_rewrite, 'change_permalink_to_external_link' ), 10, 2 );

		/* CPT's */
		add_filter( 'post_type_link', array( $red_cpl_rewrite, 'change_permalink_to_external_link' ), 10, 2 );

		/**
		 * Red_CPL_Redirect
		 */
		$red_cpl_redirect = new Red_CPL_Redirect();
		add_action( 'template_redirect', array( $red_cpl_redirect, 'redirect_external_url_posts' ) );

		/**
		 * Red_CPL_ACF
		 */
		$red_cpl_acf = new Red_CPL_ACF();
		add_action( 'init', array( $red_cpl_acf, 'acf_fields' ) );

		/**
		 * Red_CPL_Admin_Notice
		 */
		$red_cpl_admin_notice = new Red_CPL_Admin_Notice();
		add_action( 'admin_head', array( $red_cpl_admin_notice, 'acf_not_installed' ) );
	}
}
