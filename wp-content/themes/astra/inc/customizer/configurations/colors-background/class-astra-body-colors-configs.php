<?php
/**
 * Styling Options for Astra Theme.
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2020, Astra
 * @link        https://wpastra.com/
 * @since       1.4.3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'Astra_Body_Colors_Configs' ) ) {

	/**
	 * Register Body Color Customizer Configurations.
	 */
	class Astra_Body_Colors_Configs extends Astra_Customizer_Config_Base {

		/**
		 * Register Body Color Customizer Configurations.
		 *
		 * @param Array                $configurations Astra Customizer Configurations.
		 * @param WP_Customize_Manager $wp_customize instance of WP_Customize_Manager.
		 * @since 1.4.3
		 * @return Array Astra Customizer Configurations with updated configurations.
		 */
		public function register_configuration( $configurations, $wp_customize ) {

			$_section = ( defined( 'ASTRA_EXT_VER' ) && Astra_Ext_Extension::is_active( 'colors-and-background' ) ) ? 'section-colors-body' : 'section-colors-background';

			$_configs = array(

				/**
				 * Option: Text Color
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[text-color]',
					'default'  => astra_get_option( 'text-color', '#3a3a3a' ),
					'type'     => 'control',
					'control'  => 'ast-color',
					'section'  => $_section,
					'priority' => 5,
					'title'    => __( 'Text Color', 'astra' ),
				),

				/**
				 * Option: Theme Color
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[theme-color]',
					'type'     => 'control',
					'control'  => 'ast-color',
					'section'  => $_section,
					'default'  => astra_get_option( 'theme-color', '#0274be' ),
					'priority' => 5,
					'title'    => __( 'Theme Color', 'astra' ),
				),

				/**
				 * Option: Link Color
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[link-color]',
					'section'  => $_section,
					'type'     => 'control',
					'control'  => 'ast-color',
					'default'  => astra_get_option( 'link-color', '#0274be' ),
					'priority' => 5,
					'title'    => __( 'Link Color', 'astra' ),
				),

				/**
				 * Option: Link Hover Color
				 */
				array(
					'name'     => ASTRA_THEME_SETTINGS . '[link-h-color]',
					'section'  => $_section,
					'default'  => astra_get_option( 'link-h-color', '#3a3a3a' ),
					'type'     => 'control',
					'control'  => 'ast-color',
					'priority' => 15,
					'title'    => __( 'Link Hover Color', 'astra' ),
				),
			);

			$configurations = array_merge( $configurations, $_configs );

			return $configurations;
		}
	}
}

new Astra_Body_Colors_Configs();


