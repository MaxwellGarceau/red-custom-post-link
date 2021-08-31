<?php
/**
 * ACF generated PHP
 *
 * @package red-cpl
 */

namespace Garceau\Red_Custom_Post_Link\Admin;

/**
 * Red_CPL_ACF
 *
 * @class
 * @package red-cpl
 */
class Red_CPL_ACF {

	/**
	 * Contains ACF fields for the plugin in PHP format.
	 */
	public function acf_fields() {
		if ( function_exists( 'acf_add_local_field_group' ) ) :

			acf_add_local_field_group(
				array(
					'key'                   => 'group_5e85031929809',
					'title'                 => 'Post Link',
					'fields'                => array(
						array(
							'key'               => 'field_5e8503217ab4e',
							'label'             => 'Custom Post Link',
							'name'              => 'red_custom_post_link',
							'type'              => 'url',
							'instructions'      => 'Custom link when the post is clicked on in a post feed. If left blank it defaults to the post page.',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '50',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
						),
						array(
							'key'               => 'field_5e852753ead70',
							'label'             => 'Source',
							'name'              => 'red_post_source',
							'type'              => 'text',
							'instructions'      => '',
							'required'          => 0,
							'conditional_logic' => 0,
							'wrapper'           => array(
								'width' => '50',
								'class' => '',
								'id'    => '',
							),
							'default_value'     => '',
							'placeholder'       => '',
							'prepend'           => '',
							'append'            => '',
							'maxlength'         => '',
						),
					),
					'location'              => array(
						array(
							array(
								'param'    => 'post_type',
								'operator' => '==',
								'value'    => 'post',
							),
						),
						array(
							array(
								'param'    => 'post_type',
								'operator' => '==',
								'value'    => 'portfolio',
							),
						),
					),
					'menu_order'            => 0,
					'position'              => 'normal',
					'style'                 => 'default',
					'label_placement'       => 'top',
					'instruction_placement' => 'label',
					'hide_on_screen'        => '',
					'active'                => true,
					'description'           => '',
				)
			);

endif;

	}
}
