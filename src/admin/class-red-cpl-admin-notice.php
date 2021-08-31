<?php
/**
 * Contains admin notices and warnings for plugin
 *
 * @package red-cpl
 */

namespace Garceau\Red_Custom_Post_Link\Admin;

/**
 * Red_CPL_Admin_Notice
 *
 * @class
 * @package red-cpl
 */
class Red_CPL_Admin_Notice {

	/**
	 * If ACF isn't installed then let the user know
	 */
	public function acf_not_installed() {

		if ( ! class_exists( 'ACF' ) ) {

			add_action(
				'admin_notices',
				function() {
					ob_start(); ?>
					<div class="error notice">
						<p>The plugin "Red Custom Post Link" will not work properly unless ACF is installed. Please install <a href="https://www.advancedcustomfields.com/" target="_blank">ACF</a>.</p>
					</div>
					<?php
					$output = ob_get_clean();
					echo $output;
				}
			);

		}

	}
}
