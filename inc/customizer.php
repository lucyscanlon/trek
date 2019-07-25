<?php

function APIprac_reset_settings( $wp_customize )
{

    $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

    if ( isset( $wp_customize->selective_refresh ) ) {
        $wp_customize->selective_refresh->add_partial( 'blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'APIprac_customize_blogname',
        ) );
        $wp_customize->selective_refresh->add_partial( 'blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'APIprac_customize_blogdescription',
        ) );
    }

    $wp_customize->remove_section( 'colors' );
    $wp_customize->remove_section( 'header_image' );
    $wp_customize->remove_section( 'background_image' );


}

add_action( 'customize_register', 'APIprac_reset_settings', 99 );

function APIprac_customize_blogname(){
  bloginfo('name');
}

function APIprac_customize_blogdescription(){
  bloginfo('description');
}

//start of custom settings
function trek_lucyisobel_custom_settings($wp_customize){


  //creating homepage layout section
  $wp_customize->add_section('header_section', array(
    'title' => __('Header', 'Trek'),
    'priority' => 200,
  ));


  //creating notice for header section
  $wp_customize->add_setting('header_title_notice_setting');


  $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'header_title_notice_control', array(
    'label' => __('Header Settings', 'Trek'),
    'description' => __('Arrange and design your header'),
    'section' => 'header_section',
    'settings' => 'header_title_notice_setting'
  )));



  //creating header layout setting and control
  $wp_customize->add_setting( 'header_layout_radio_button',
			array(
				'default' => 'menucenter',
				'transport' => 'refresh',
				'sanitize_callback' => 'skyrocket_radio_sanitization'
			)
		);
		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'header_layout_radio_button',
			array(
				'label' => __( 'Header Layout', 'Trek' ),
				'description' => esc_html__( 'Choose a layout for your header', 'Trek' ),
				'section' => 'header_section',
        'settings' => 'header_layout_radio_button',
				'choices' => array(
					'menucenter' => array(
						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupheader1.png',
						'name' => __( 'Menu centered', 'Trek' )
					),
					'menuright' => array(
						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupheader2.png',
						'name' => __( 'Menu left aligned', 'Trek' )
					),
					'menuleft' => array(
						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupheader4.png',
						'name' => __( 'Menu right aligned', 'Trek' )
					)
				)
			)
		) );


    //creating header background color control
      $wp_customize->add_setting('header_background_color', array(
        'default' => '#1D272E',
        'transport' => 'refresh',

      ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
      'label' => __('Header and Footer Background Color', 'Trek'),
      'section' => 'header_section',
      'settings' => 'header_background_color'
    )));




    //creating the header text color controls
      $wp_customize->add_setting('header_text_color', array(
        'default' => '#FFFFFF',
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
        'label' => __('Header and Footer Text Color', 'Trek'),
        'section' => 'header_section',
        'settings' => 'header_text_color'
      )));





}

add_action('customize_register', 'trek_lucyisobel_custom_settings');
