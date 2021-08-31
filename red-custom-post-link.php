<?php
/**
 * Plugin Name:       RED Custom Post Link
 * Description:       Adds ability to input a custom link for posts
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Author:            Max Garceau
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       red-cpl
 * Domain Path:       /languages
 *
 * @package red-cpl
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

define( 'RED_CPL_PATH', plugin_dir_path( __FILE__ ) );
define( 'RED_CPL_URL', plugin_dir_url( __FILE__ ) );

require_once RED_CPL_PATH . 'vendor/autoload.php';

/**
 * Provides support for WordPress coding standards while using PSR-4 autoloading
 */
use Pablo_Pacheco\WP_Namespace_Autoloader\WP_Namespace_Autoloader;
$autoloader = new WP_Namespace_Autoloader(
	array(
		'directory'        => __DIR__, // Directory of your project. It can be your theme or plugin. Defaults to __DIR__ (probably your best bet).
		'namespace_prefix' => 'Garceau\Red_Custom_Post_Link', // Main namespace of your project. E.g My_Project\Admin\Tests should be My_Project. Defaults to the namespace of the instantiating file.
		'classes_dir'      => 'src', // (optional). It is where your namespaced classes are located inside your project. If your classes are in the root level, leave this empty. If they are located on 'src' folder, write 'src' here
	)
);
$autoloader->init();

/* Init */
$red_custom_post_link = new Garceau\Red_Custom_Post_Link\Red_Custom_Post_Link();
$red_custom_post_link->init();
