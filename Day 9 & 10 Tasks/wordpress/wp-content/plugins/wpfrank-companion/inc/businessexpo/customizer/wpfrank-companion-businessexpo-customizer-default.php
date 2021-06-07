<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *
 * @package wpfrank-companion
 */

	if ( ! function_exists( 'wpfrank_companion_businessexpo_main_slider_default_content' ) ) :
		//Slider content
		function wpfrank_companion_businessexpo_main_slider_default_content( $wp_customize ){
			
			$businessexpo_main_slider_data = $wp_customize->get_setting( 'businessexpo_main_slider_content' );
			if ( ! empty( $businessexpo_main_slider_data ) ) {
				$businessexpo_main_slider_data->default = json_encode( array(
					array(
						'title'      	=> esc_html__( 'We Ensure Your Business Goal', 'wpfrank-companion' ),
						'subtitle'      => esc_html__( 'We Are Creative', 'wpfrank-companion' ),
						'text'       	=> esc_html__( '"Build Your Amazing Website With BusinessExpo"','wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link'			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/slide-1.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b10',
					),
					array(
						'title'			=> esc_html__( 'Turn Your Vision Into Reality','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'We Are Creative', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"Kick Start Your Website Today"', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/slide-2.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b14',
					),					
					array(
						'title'			=> esc_html__( 'Discover The World of Business','wpfrank-companion' ),
						'subtitle'      => esc_html__( 'We Are Creative', 'wpfrank-companion' ),
						'text'			=> esc_html__( '"Create Your Own Oppertunities "', 'wpfrank-companion' ),
						'button_text'	=> __('Learn More','wpfrank-companion'),
						'link' 			=> '#',
						'image_url'		=> wpfrank_companion_plugin_url .'/inc/businessexpo/img/slider/slide-3.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b18',
					),
				
				) );
			}
		}
		add_action( 'customize_register', 'wpfrank_companion_businessexpo_main_slider_default_content' );
	endif;


	//Service content
	if ( ! function_exists( 'wpfrank_companion_businessexpo_service_default_content' ) ) :
		function wpfrank_companion_businessexpo_service_default_content( $wp_customize ){
		
			$businessexpo_service_data = $wp_customize->get_setting( 'businessexpo_service_content' );
			if ( ! empty( $businessexpo_service_data ) ) {
				$businessexpo_service_data->default = json_encode( array(
					array(
						'icon_value'	=> 'fas fa-object-ungroup',
						'title'			=> esc_html__( 'Networking', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_icon',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> 'fas fa-users',
						'title'			=> esc_html__( 'Social Activity', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_icon',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> 'fas fa-desktop',
						'title'			=> esc_html__( 'Web Design', 'businessexpo' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit quos dolor.',
						'choice'		=> 'customizer_repeater_icon',
						'button_text'	=> __('Read More','wpfrank-companion'),
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b17',
					),
				) );
			}
	    }
		add_action( 'customize_register', 'wpfrank_companion_businessexpo_service_default_content' );
	endif;

	//Testimonial content
	if ( ! function_exists( 'wpfrank_companion_businessexpo_testimonial_default_content' ) ) :
		function wpfrank_companion_businessexpo_testimonial_default_content( $wp_customize ){

				$businessexpo_testimonial_data = $wp_customize->get_setting( 'businessexpo_testimonial_content' );
				if ( ! empty( $businessexpo_testimonial_data ) ) {
					$businessexpo_testimonial_data->default = json_encode( array(
						array(
						'title'			=> 'Marvellous Macaw',
						'text'			=> '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?"',
						'designation'	=> __('Businessman','wpfrank-companion'),
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/1.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b30',
						),
						array(
						'title'			=> 'Casy Storm',
						'text'			=> '"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?"',
						'designation'	=> __('Enterpreneur','wpfrank-companion'),
						'image_url'		=> wpfrank_companion_plugin_url .'inc/businessexpo/img/testimonial/2.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b40',
						),
					) );
				}
			}
	add_action( 'customize_register', 'wpfrank_companion_businessexpo_testimonial_default_content' );
	endif;