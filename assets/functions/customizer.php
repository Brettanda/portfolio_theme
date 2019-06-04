<?php


/*
*
*	Theme Customizer 
*	https://codex.wordpress.org/Theme_Customization_API
*
*/

function theme_customize_register( $wp_customize ){
	// $wp_customize->add_section('fonts', array(
	// 'title'	=>__('Custom Fonts', 'fonts'),
	// 'description' => 'Change the fonts for different sections of the theme',
	// 'priority' => 50,
	// ));
	// $wp_customize->add_setting( 'font_page_header', array(
    //   'default'   => '',
    //   'transport' => 'refresh',
    // ) );
	// $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'font_page_header', array(
    //   'section' => 'fonts',
	// 	'type' => 'text',
    //   'label'   => esc_html__( 'Header Font', 'theme' ),
	// ) ) );
		
	// Slideshow

	$wp_customize->add_setting('header_switch', array(
		'default' => 'slide',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_switch', array(
			'section' => 'header_image',
			'description' => 'make sure to have the same sized image for each one or there might be a weird effect between transitions of images.',
			'type' => 'radio',
			'choices' => array(
				'slide' => 'Slide Show',
				'layer' => 'Multi Layered',
				'none' => 'Java Script Canvas',
			),
			'label' => esc_html__('Slideshow/ Multi Layered', 'theme'),
	)));
	$wp_customize->add_setting('header_length', array(
			'default' => '20',
			'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_length', array(
			'section' => 'header_image',
			'type' => 'number',
			'label' => esc_html__('Slide show animation length', 'theme'),
	)));
	$wp_customize->add_setting('header_delay', array(
			'default' => '4',
			'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'header_delay', array(
			'section' => 'header_image',
			'type' => 'number',
			'label' => esc_html__('Slide show transition delay', 'theme'),
	)));
	$wp_customize->add_setting('header_image', array(
			'default' => 'triforce-wallpaper.png',
			'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image', array(
			'section' => 'header_image',
			'height' => 1080,
			'width' => 1920,
			'flex_width' => false,
			'flex_height' => false,
			'label' => esc_html__('Image Number 1', 'theme'),
	)));
	$wp_customize->add_setting('header_image_two', array(
			'default' => '',
			'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image_two', array(
			'section' => 'header_image',
			'height' => 1080,
			'width' => 1920,
			'flex_width' => false,
			'flex_height' => false,
			'label' => esc_html__('Image Number 2', 'theme'),
	)));
	$wp_customize->add_setting('header_image_three', array(
			'default' => '',
			'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image_three', array(
			'section' => 'header_image',
			'height' => 1080,
			'width' => 1920,
			'flex_width' => false,
			'flex_height' => false,
			'label' => esc_html__('Image Number 3', 'theme'),
	)));
	$wp_customize->add_setting('header_image_four', array(
			'default' => '',
			'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'header_image_four', array(
			'section' => 'header_image',
			'height' => 1080,
			'width' => 1920,
			'flex_width' => false,
			'flex_height' => false,
			'label' => esc_html__('Image Number 4', 'theme'),
	)));
}
add_action( 'customize_register', 'theme_customize_register' );
