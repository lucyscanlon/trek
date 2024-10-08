<?php

function APIprac_reset_settings( $wp_customize )
{

    // Making the Site Title and Site Description pre-built WordPress Settings update live in the Customizer if they are changed
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

    // Removing the Colors, Header Image and Background Image sections from the customizer.
    // More personalised settings are added instead in the trek_lucyisobel_custom_settings function
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

// Function which holds all the Trek custom settings in the customizer
function trek_lucyisobel_custom_settings($wp_customize){


  // Creates the panel "Your Theme Settings" in the customizer. This panel holds all the Trek custom settings
  $wp_customize->add_panel( 'theme_settings', array(
    'priority' => 0,
    'title' => 'Your Theme Options',

  ));



  /*
  ========================================
  HEADER AND FOOTER SECTION
  ========================================
  */


  // Creates the "header" section
  $wp_customize->add_section('header_section', array(
    'title' => __('Header and footer', 'trek'),
    'priority' => 0,
    'panel' => 'theme_settings',

  ));


  // Adds the title "Header & Footer Settings" in the "header" section
  $wp_customize->add_setting('header_title_notice_setting', array(
    'sanitize_callback' => 'wp_filter_nohtml_kses',
  ));


  $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'header_title_notice_control', array(
    'label' => __('Header & Footer Settings', 'trek'),
    'description' => __('Arrange and design your header', 'trek'),
    'section' => 'header_section',
    'settings' => 'header_title_notice_setting'
  )));



  // Creating the radio control "header layout" (this gives three options for the users header layout)
  $wp_customize->add_setting( 'header_layout_radio_button',
			array(
				'default' => 'menuleft',
				'transport' => 'refresh',
				'sanitize_callback' => 'skyrocket_radio_sanitization'
			)
		);
		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'header_layout_radio_button',
			array(
				'label' => __( 'Header Layout', 'trek' ),
				'description' => esc_html__( 'Choose a layout for your header', 'trek' ),
				'section' => 'header_section',
        'settings' => 'header_layout_radio_button',
				'choices' => array(
					'menucenter' => array(
						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupheader1.png',
						'name' => __( 'Menu centered', 'trek' )
					),
					'menuright' => array(
						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupheader2.png',
						'name' => __( 'Menu right aligned', 'trek' )
					),
					'menuleft' => array(
						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupheader4.png',
						'name' => __( 'Menu left aligned', 'trek' )
					)
				)
			)
		) );


    // Creates the "Header & Footer Color Settings" title in the "header" section
    $wp_customize->add_setting('header_title_color_section', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'header_title_color_section', array(
      'label' => __('Header & Footer Color Settings', 'trek'),
      'description' => __('Select your header color scheme', 'trek'),
      'section' => 'header_section',
      'settings' => 'header_title_color_section'
    )));



    // Creating Color Control for the Header and Footer
    $wp_customize->add_setting('header_background_color', array(
      'default' => '#1d272e',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
      'label' => __('Header and Footer background color', 'trek'),
      'section' => 'header_section',
      'settings' => 'header_background_color'
    )));




    // Creating the Color Control for the Header & Footer text
      $wp_customize->add_setting('header_text_color', array(
        'default' => '#FFFFFF',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_color', array(
        'label' => __('Header and Footer Text Color', 'trek'),
        'section' => 'header_section',
        'settings' => 'header_text_color'
      )));



      // Creating the Color Control for the Header & footer text on hover
      $wp_customize->add_setting('header_text_hover_color', array(
        'default' => '#E4BCE4',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_hover_color', array(
        'label' => __('Header and Footer Text Hover Color', 'trek'),
        'section' => 'header_section',
        'settings' => 'header_text_hover_color'
      )));



        /*
        ========================================
        SOCIAL MEDIA SECTION
        ========================================
        */


      // Creates the "Social Media" section
      $wp_customize->add_section('socialmedia_section', array(
        'title' => __('Social Media', 'trek'),
        'priority' => 10,
        'panel' => 'theme_settings',
      ));


      // Creates the title "Social Media Settings" in the "Social Media" section
      $wp_customize->add_setting('socialmedia_title_section', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'socialmedia_title_section', array(
        'label' => __('Social Media Settings', 'trek'),
        'description' => __('Add the links to your social media', 'trek'),
        'section' => 'socialmedia_section',
        'settings' => 'socialmedia_title_section'
      )));


      // Toggle setting to display Twitter Icon on or off
      $wp_customize->add_setting('toggle_switch_twitter', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_twitter', array(
        'label' => __('Twitter', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_twitter'
      )));


      // Creates input box for users Twitter link
      $wp_customize->add_setting('twitter_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'twitter_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'twitter_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Twitter link here', 'trek'),
        )

      )));


      // Toggle setting to display Facebook Icon on or off
      $wp_customize->add_setting('toggle_switch_facebook', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_facebook', array(
        'label' => __('Facebook', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_facebook'
      )));


      // Creates input box for users Facebook link
      $wp_customize->add_setting('facebook_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'facebook_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'facebook_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Facebook link here', 'trek'),
        )

      )));


      // Toggle setting to display Instagram Icon on or off
      $wp_customize->add_setting('toggle_switch_instagram', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_instagram', array(
        'label' => __('Instagram', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_instagram'
      )));


      // Creates input box for users Instagram link
      $wp_customize->add_setting('instagram_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'instagram_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'instagram_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Instagram link here', 'trek'),
        )

      )));



      // Toggle setting to display Pinterest Icon on or off
      $wp_customize->add_setting('toggle_switch_pinterest', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_pinterest', array(
        'label' => __('Pinterest', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_pinterest'
      )));


      // Creates input box for users Pinterest link
      $wp_customize->add_setting('pinterest_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pinterest_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'pinterest_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Pinterest link here', 'trek'),
        )

      )));



      // Toggle setting to display Google Plus Icon on or off
      $wp_customize->add_setting('toggle_switch_googleplus', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_googleplus', array(
        'label' => __('Google Plus', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_googleplus'
      )));


      // Creates input box for users Google Plus link
      $wp_customize->add_setting('googleplus_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'googleplus_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'googleplus_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Google Plus link here', 'trek'),
        )

      )));


      // Toggle setting to display YouTube Icon on or off
      $wp_customize->add_setting('toggle_switch_youtube', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_youtube', array(
        'label' => __('YouTube', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_youtube'
      )));


      // Creates input box for users YouTube link
      $wp_customize->add_setting('youtube_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'youtube_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'youtube_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your YouTube link here', 'trek'),
        )

      )));


      // Toggle setting to display LinkedIn Icon on or off
      $wp_customize->add_setting('toggle_switch_linkedin', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_linkedin', array(
        'label' => __('LinkedIn', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_linkedin'
      )));


      // Creates input box for users LinkedIn link
      $wp_customize->add_setting('linkedin_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'linkedin_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'linkedin_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your LinkedIn link here', 'trek'),
        )

      )));


      // Toggle setting to display Snapchat Icon on or off
      $wp_customize->add_setting('toggle_switch_snapchat', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_snapchat', array(
        'label' => __('Snapchat', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_snapchat'
      )));


      // Creates input box for users Snapchat link
      $wp_customize->add_setting('snapchat_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'snapchat_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'snapchat_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Snapchat link here', 'trek'),
        )

      )));


      // Toggle setting to display Goodreads Icon on or off
      $wp_customize->add_setting('toggle_switch_goodreads', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));


      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_goodreads', array(
        'label' => __('Goodreads', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_goodreads'
      )));


      // Creates input box for users Goodreads link
      $wp_customize->add_setting('goodreads_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));


      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'goodreads_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'goodreads_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Goodreads link here', 'trek'),
        )

      )));


      // Toggle setting to display Shop Icon on or off
      $wp_customize->add_setting('toggle_switch_shop', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_shop', array(
        'label' => __('Shop', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_shop'
      )));


      // Creates input box for users Shop link
      $wp_customize->add_setting('shop_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shop_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'shop_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Shop link here', 'trek'),
        )

      )));



      // Toggle setting to display Email Icon on or off
      $wp_customize->add_setting('toggle_switch_email', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_email', array(
        'label' => __('Email', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_email'
      )));


      // Creates input box for users Email address
      $wp_customize->add_setting('email_link', array(
        'sanitize_callback' => 'sanitize_email'
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'email_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'email_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your email address here', 'trek'),
        )

      )));



      // Toggle setting to display Vimeo Icon on or off
      $wp_customize->add_setting('toggle_switch_vimeo', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));


      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_vimeo', array(
        'label' => __('Vimeo', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_vimeo'
      )));



      // Creates input box for users Vimeo link
      $wp_customize->add_setting('vimeo_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'vimeo_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'vimeo_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Vimeo link here', 'trek'),
        )

      )));


      // Toggle setting to display Tumblr Icon on or off
      $wp_customize->add_setting('toggle_switch_tumblr', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_tumblr', array(
        'label' => __('Tumblr', 'trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_tumblr'
      )));


      // Creates input box for users Tumblr link
      $wp_customize->add_setting('tumblr_link', array(
        'sanitize_callback' => 'esc_url_raw',
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'tumblr_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'tumblr_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Tumblr link here', 'trek'),
        )

      )));



      /*
      ========================================
      FRONT PAGE SECTION
      ========================================
      */



      // Creating the "Front Page" Section
      $wp_customize->add_section('homepage_section', array(
        'title' => __('Front Page', 'trek'),
        'panel' => 'theme_settings',
        'priority' => 20,
      ));



      // Creating the title "Front Page Background Settings" title in the "Front Page" section
      $wp_customize->add_setting('homepage_title_section', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_title_section', array(
        'label' => __('Front Page Background Settings', 'trek'),
        'description' => __('Edit your homepage to suit you', 'trek'),
        'section' => 'homepage_section',
        'settings' => 'homepage_title_section'
      )));


      // Creating the setting to upload an image as Front Page background
      $wp_customize->add_setting('homepage_background_image', array(
        'default' => "https://images.unsplash.com/photo-1564844336080-c1a2a9b149a8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2700&q=80",
        'sanitize_callback' => 'theme_slug_sanitize_file'
      ));


      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_background_image', array(
        'label' => __('Use Image as Background', 'trek'),
        'description' => __("Choose an image to be the background of your homepage. It is highly recommended this image is of a high quality. Please note that even if the setting below 'Use Video as Background' is turned on, you still need to upload a background image (this will be displayed on mobile devices) . ", 'trek'),
        'section' => 'homepage_section',
        'settings' => 'homepage_background_image',


      )));



      // Toggle on or off Video background instead of Image background
      $wp_customize->add_setting('homepage_video_toggle', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_video_toggle', array(
        'label' => __('Use Video as Background', 'trek'),
        'description' => __("Display a muted looped video as your homepage background when your website is viewed on larger devices e.g. desktop computers or laptops. (IMPORTANT: Your homepage image will still be displayed on mobile and tablet devices, you can upload this image in the setting above). This setting embeds a Youtube or Vimeo video as your background, saving storage on your blog and allowing it to be displayed at the best quality possible. First upload your chosen video to either site. " , 'trek'),
        'section' => 'homepage_section',
        'settings'=> 'homepage_video_toggle'
      )));


      // Creates the input box for the 1st link needed for Video Background
      $wp_customize->add_setting('video_background_link', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));


      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'video_background_link', array(
        'section' => 'homepage_section',
        'label' => __('Video link', 'trek'),
        'description' => __('This is a very specific link needed. Please follow the install instructions to see how to find it.', 'trek'),
          'settings' => 'video_background_link',
          'input_attrs' => array(
          'placeholder' => __('Paste the link here', 'trek'),
        )

      )));


      // Creates the input for the 2nd link needed for Video background
      $wp_customize->add_setting('video_playlist_link', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses'
      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'video_playlist_link', array(
        'section' => 'homepage_section',
        'label' => __('Video 2nd Link', 'trek'),
        'description' => __('This is also a very specific link needed. Please follow the install instructions to see how to find it.', 'trek'),
        'settings' => 'video_playlist_link',
        'input_attrs' => array(
          'placeholder' => __('Paste the link here', 'trek'),
        )

      )));



      // Creates the title "Front Page Content Height Settings" in the "Front Page" section
      $wp_customize->add_setting('homepage_contentheight_title_section', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_contentheight_title_section', array(
        'label' => __('Front Page Content Height Settings', 'trek'),
        'description' => __('Adjust the height of your content to fit perfectly onto your homepage', 'trek'),
        'section' => 'homepage_section',
        'settings' => 'homepage_contentheight_title_section'
      )));


      // Creates the Front Page content height setting
      $wp_customize->add_setting( 'homepage_title_height', array(
        'default' => 32,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
      ));

      $wp_customize->add_control( new Skyrocket_Slider_Custom_Control( $wp_customize, 'homepage_title_height', array(
        'label' => __('Content Height (vh)', 'trek'),
        'section' => 'homepage_section',
        'settings' => 'homepage_title_height',
        'input_attrs' => array(
          'min' => 10,
          'max' => 60,
          'step' => 1,
        ),
      )));



      // Creates the title "Front Page Logo Settings" in "Front Page" section
        $wp_customize->add_setting('homepage_logo_title_section', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_logo_title_section', array(
          'label' => __('Front Page Logo Settings', 'trek'),
          'description' => __('Choose whether to display your logo on your homepage or not', 'trek'),
          'section' => 'homepage_section',
          'settings' => 'homepage_logo_title_section'
        )));



        // Toggle the logo to display or not on the Front Page
        $wp_customize->add_setting('homepage_logo_toggle', array(
          'default' => 0,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_logo_toggle', array(
          'label' => __('Display Logo', 'trek'),
          'description' => __('Choose whether to display your logo on your homepage', 'trek'),
          'section' => 'homepage_section',
          'settings'=> 'homepage_logo_toggle'
        )));



        // Add the title "Front Page Title Settings" to the "Front Page" section
      $wp_customize->add_setting('homepage_title_title_section', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_title_title_section', array(
        'label' => __('Front Page Title Settings', 'trek'),
        'description' => __('Edit your homepage title appearance', 'trek'),
        'section' => 'homepage_section',
        'settings' => 'homepage_title_title_section'
      )));



      // Toggle the Site Title to display or not on the Front Page
      $wp_customize->add_setting('homepage_title_toggle', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_title_toggle', array(
        'label' => __('Display Site Title', 'trek'),
        'description' => __('Choose whether to display your site title on your homepage', 'trek'),
        'section' => 'homepage_section',
        'settings'=> 'homepage_title_toggle'
      )));


    // Creates the setting to change the color of the Site Title on the Front Page
    $wp_customize->add_setting('homepage_title_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_color', array(
      'label' => __('Title Color', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_color'
    )));


    // Creates the setting to change the color of the Site Title shadow on the Front Page
    $wp_customize->add_setting('homepage_title_shadow_color', array(
      'default' => '#000000',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_shadow_color', array(
      'label' => __('Title Shadow Color', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_shadow_color'
    )));



    // Creates the setting to change the Site Title hover color on the Front Page
    $wp_customize->add_setting('homepage_title_link_color', array(
      'default' => '#e4bce4',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_link_color', array(
      'label' => __('Title Hover Color', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_link_color'
    )));



    // Creates the input box for user to input their blog link
    $wp_customize->add_setting('homepage_blog_link', array(
      'default' => get_permalink( get_option('page_for_posts' ) ),
      'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'homepage_blog_link', array(
      'label' => __('Link to your posts page', 'trek'),
      'description' => __('Make sure your readers can access your blog', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_blog_link',
      'input_attrs' => array(
        'placeholder' => __('Paste the link to your blog here', 'trek'),
      )

    )));



    // Creates the title "Front Page Description Settings" in the "Front Page" section
    $wp_customize->add_setting('homepage_description_title_section', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_description_title_section', array(
      'label' => __('Front Page Description Settings', 'trek'),
      'description' => __('Edit your homepage description appearance', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_description_title_section'
    )));



    // Toggle the description on or off on the Front Page
    $wp_customize->add_setting('toggle_switch_description', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_description', array(
      'label' => __('Display Description', 'trek'),
      'section' => 'homepage_section',
      'settings'=> 'toggle_switch_description'
    )));



    // Creates the setting to change the color of the Site Description on the Front Page
    $wp_customize->add_setting('homepage_description_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_description_color', array(
      'label' => __('Description Color', 'trek'),
      'description' => __('Will only display if description toggle is on', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_description_color'
    )));



    // Creates the setting to change the text shadow color of the Site Description on the Front Page
    $wp_customize->add_setting('homepage_description_shadow_color', array(
      'default' => '#000000',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_description_shadow_color', array(
      'label' => __('Description Shadow Color', 'trek'),
      'description' => __('Will only display if description toggle is on', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_description_shadow_color'
    )));


    // Creates the title "Read More Button" in the "front Page" Section
    $wp_customize->add_setting('homepage_readmore_button_notice', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_readmore_button_notice', array(
      'label' => __('Read More Button', 'trek'),
      'description' => __('Link your blog from your homepage', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_button_notice'
    )));


    // Toggles the read more button to display or not on the Front Page
    $wp_customize->add_setting('homepage_readmore_toggle', array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_readmore_toggle', array(
      'label' => __('Show Button', 'trek'),
      'description' => __('Turn this setting on to have a button appear. This can link to anywhere, but its reccomended to link to your blog. Turn this off to hide the button. (Your blog title also acts as a link to your blog, therefore this can be an optional addition).', 'trek'),
      'section' => 'homepage_section',
      'settings'=> 'homepage_readmore_toggle'
    )));



    // Creates the setting to change the background color of the read more button on the Front Page
    $wp_customize->add_setting('homepage_readmore_color', array(
      'default' => '#1D272E',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_color', array(
      'label' => __('Read More Button Color', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_color'
    )));



    // Creates the setting to change the color of the text of the read more button on the Front Page
    $wp_customize->add_setting('homepage_readmore_text_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_text_color', array(
      'label' => __('Read More Button Text Color', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text_color'
    )));



    // Creates the setting to change the hover text colors of the read more button on the Front Page
    $wp_customize->add_setting('homepage_readmore_text_hover_color', array(
      'default' => '#e4bce4',
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_text_hover_color', array(
      'label' => __('Read More Button Text Hover Color', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text_hover_color'
    )));



    // Creates the input box for user to input the text for the read more button on the Front Page
    $wp_customize->add_setting('homepage_readmore_text', array(
      'default' => __('Read More', 'trek'),
      'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'homepage_readmore_text', array(
      'label' => __('Read More button text', 'trek'),
      'description' => __('Change the text for your blog link', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text',
      'input_attrs' => array(
        'placeholder' => __('Read More', 'trek'),
      )

    )));



    // Creates the input box for user to input their read more button link
    $wp_customize->add_setting('homepage_readmore_link', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'homepage_readmore_link', array(
      'label' => __('Link for your Read More Button', 'trek'),
      'description' => __('Link to any site you like, or just link to your blog', 'trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_link',
      'input_attrs' => array(
        'placeholder' => __('Paste the link to your blog here', 'trek'),
      )

    )));




    /*
    ========================================
    BLOG SETTINGS SECTION
    ========================================
    */



    // Creates the blog settings section
    $wp_customize->add_section('blog_section', array(
      'title' => __('Blog Settings', 'trek'),
      'panel' => 'theme_settings',
      'priority' => 21,
    ));



    // Creates the title "Blog Banner Section" in the "Blog" section
    $wp_customize->add_setting('blog_banner_section', array(
      'sanitize_callback' => 'esc_url_raw',
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_banner_section', array(
      'label' => __('Blog Banner Section', 'trek'),
      'description' => __('This banner appears on every page of your blog (except the homepage). Either display some of your blog information such as your site title, logo or description here, or you can activate the featured post option in the section below. Skip to the section called "Enable featured post display" to learn more about this.', 'trek'),
      'section' => 'blog_section',
      'settings' => 'blog_banner_section'
    )));


    // Toggle to show the Site Logo instead of the Site Title
    $wp_customize->add_setting('toggle_blogbanner_logo', array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blogbanner_logo', array(
      'label' => __('Display Logo instead of title', 'trek'),
      'description' => __('Turn this setting on to display your site logo instead of your site title', 'trek'),
      'section' => 'blog_section',
      'settings'=> 'toggle_blogbanner_logo'
    )));



    // Toggle to display the Site Description on the Blog banner
    $wp_customize->add_setting('toggle_blogbanner_description', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blogbanner_description', array(
      'label' => __('Display blog description', 'trek'),
      'description' => __('Turn this setting on to display your site description', 'trek'),
      'section' => 'blog_section',
      'settings'=> 'toggle_blogbanner_description'
    )));



    // Creates setting to change the color of the Blog Banner text
    $wp_customize->add_setting('blog_banner_text_color', array(
      'default' => get_theme_mod('homepage_title_color', '#FFFFFF'),
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_banner_text_color', array(
      'label' => __('Banner Text Color', 'trek'),
      'section' => 'blog_section',
      'settings' => 'blog_banner_text_color'
    )));



    // Creates the setting to change the shadow color of the text on the blog banner
    $wp_customize->add_setting('blog_banner_text_shadow_color', array(
      'default' => get_theme_mod('homepage_title_shadow_color', '#000000'),
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_banner_text_shadow_color', array(
      'label' => __('Banner Text Shadow Color', 'trek'),
      'section' => 'blog_section',
      'settings' => 'blog_banner_text_shadow_color'
    )));


    // Creates the setting to change the hover color of the text on the blog banner
    $wp_customize->add_setting('blog_banner_text_hover_color', array(
      'default' => get_theme_mod('homepage_title_link_color', '#E4BCE4'),
      'transport' => 'refresh',
      'sanitize_callback' => 'sanitize_hex_color',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_banner_text_hover_color', array(
      'label' => __('Banner Text Hover Color', 'trek'),
      'section' => 'blog_section',
      'settings' => 'blog_banner_text_hover_color'
    )));




    // Creates the setting for the user to upload a background image for the blog banner
    $wp_customize->add_setting('banner_background_image', array(
      'default' => "https://images.unsplash.com/photo-1513657713647-0182f4ee3bf8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80",
      'sanitize_callback' => 'theme_slug_sanitize_file'
    ));

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_background_image', array(
      'label' => __('Upload an Image for Banner Background', 'trek'),
      'description' => __("Choose an image to be your banner background ", 'trek'),
      'section' => 'blog_section',
      'settings' => 'banner_background_image',


    )));



    // Creates the title "Enable Featured Post Display" in the "Blog" section
    $wp_customize->add_setting('blog_banner_featured_section', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_banner_featured_section', array(
      'label' => __('Enable featured post display', 'trek'),
      'description' => __('This setting will display the featured image, title and link of a blog post of your choice. Please note if this setting is activated then your site information will not be displayed in the banner.', 'trek'),
      'section' => 'blog_section',
      'settings' => 'blog_banner_featured_section'
    )));



    //toggle featured post feature on or off
    $wp_customize->add_setting('toggle_blogbanner_featuredpost', array(
      'default' => 0,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blogbanner_featuredpost', array(
      'label' => __('Enable featured post display', 'trek'),
      'section' => 'blog_section',
      'settings'=> 'toggle_blogbanner_featuredpost'
    )));



    // Creates the input box for user to input chosen category for the featured post feature
    $wp_customize->add_setting('featuredpost_category', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'featuredpost_category', array(
      'section' => 'blog_section',
      'label' => __('Chosen featured category name', 'trek'),
      'description' => __('Please create a new category and put your chosen post into that category. Then paste the name of this category here. Please only assign one post to this category at a time. ', 'trek'),
      'settings' => 'featuredpost_category',
      'input_attrs' => array(
        'placeholder' => __('Category name', 'trek'),
      )

    )));


    // Creates the title "Secondary Menu" in the "Blog" section
    $wp_customize->add_setting('secondary_menu_display_title', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'secondary_menu_display_title', array(
      'label' => __('Secondary Menu', 'trek'),
      'description' => __('This secondary menu was built to display some of your categories. If your blog is new and has limited posts then you might not have anything to fill this space. Turn it off for now here. Please note, this menu automatically does not display when viewing the website on smaller screens such as small laptops, tablets or phones.', 'trek'),
      'section' => 'blog_section',
      'settings' => 'secondary_menu_display_title'
    )));



    // Toggle the secondary menu on or off on your blog
    $wp_customize->add_setting('secondary_menu_display', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'secondary_menu_display', array(
      'label' => __('Display Secondary Menu', 'trek'),
      'section' => 'blog_section',
      'settings'=> 'secondary_menu_display'
    )));



    // Creates the title "Blog Page Settings" in the "Blog" section
    $wp_customize->add_setting('blog_title_section', array(
      'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_title_section', array(
      'label' => __('Blog Page Settings', 'trek'),
      'description' => __('Edit the appearance of your blog page', 'trek'),
      'section' => 'blog_section',
      'settings' => 'blog_title_section'
    )));


    // Toggle the sidebar on or off on your blog
    $wp_customize->add_setting('blog_toggle_sidebar', array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'skyrocket_switch_sanitization',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'blog_toggle_sidebar', array(
      'label' => __('Display Sidebar', 'trek'),
      'section' => 'blog_section',
      'settings'=> 'blog_toggle_sidebar'
    )));



    // Creates the setting for the user to choose which side their sidebar displays
    $wp_customize->add_setting( 'sidebar_layout_radio_button',
  			array(
  				'default' => 'sidebarright',
  				'transport' => 'refresh',
  				'sanitize_callback' => 'skyrocket_radio_sanitization'
  			)
  		);
  		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'sidebar_layout_radio_button',
  			array(
  				'label' => __( 'Sidebar Layout', 'trek' ),
  				'description' => esc_html__( 'Choose which side your sidebar is on', 'trek' ),
  				'section' => 'blog_section',
          'settings' => 'sidebar_layout_radio_button',
  				'choices' => array(
  					'sidebarright' => array(
  						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarright.png',
  						'name' => __( 'Sidebar right aligned', 'trek' )
  					),
  					'sidebarleft' => array(
  						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarleft.png',
  						'name' => __( 'Sidebar left aligned', 'trek' )
  					),
  				)
  			)
  		) );


      // Color control to choose the background color of user's blog
      $wp_customize->add_setting('blog_page_background_color', array(
        'default' => '#e2d7e2',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_page_background_color', array(
        'label' => __('Blog Background Color', 'trek'),
        'section' => 'blog_section',
        'settings' => 'blog_page_background_color'
      )));



      // Creates the setting for the user to choose the layout of their blog posts on index page
      $wp_customize->add_setting( 'post_preview_layout_radio_button',
    			array(
    				'default' => 'fullimage',
    				'transport' => 'refresh',
    				'sanitize_callback' => 'skyrocket_radio_sanitization'
    			)
    		);
    		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'post_preview_layout_radio_button',
    			array(
    				'label' => __( 'Post Preview Layout', 'trek' ),
    				'description' => esc_html__( 'Choose the layout of your post previews on your blog', 'trek' ),
    				'section' => 'blog_section',
            'settings' => 'post_preview_layout_radio_button',
    				'choices' => array(
    					'fullimage' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/fullimage.png',
    						'name' => __( 'Full Image Layout', 'trek' )
    					),
    					'liststyle' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/liststyle.png',
    						'name' => __( 'List Style', 'trek' )
    					),
              'liststylereversed' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/liststylereversed.png',
    						'name' => __( 'List Style Reversed', 'trek' )
    					),
              'textoverimage' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/textoverimage.png',
    						'name' => __( 'Text Over Image', 'trek' )
    					),
    				)
    			)
    		) );




      // Creates the title "Post Preview Display Settings" in the "blog" section
      $wp_customize->add_setting('blog_post_preview_settings_notice', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_post_preview_settings_notice', array(
        'label' => __('Post Preview Display Settings', 'trek'),
        'description' => __('Edit the appearance of your posts', 'trek'),
        'section' => 'blog_section',
        'settings' => 'blog_post_preview_settings_notice'
      )));



      // Color control for Blog Link color
      $wp_customize->add_setting('blog_page_link_color', array(
        'default' => '#000000',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_page_link_color', array(
        'label' => __('Blog Post Link Color', 'trek'),
        'description' => __('Does not apply to 4th layout option', 'trek'),
        'section' => 'blog_section',
        'settings' => 'blog_page_link_color'
      )));


      // Color control for blog link color on hover
      $wp_customize->add_setting('blog_page_link_hover_color', array(
        'default' => '#E4BCE4',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_page_link_hover_color', array(
        'label' => __('Blog Post Link Hover Color', 'trek'),
        'section' => 'blog_section',
        'settings' => 'blog_page_link_hover_color'
      )));



      // Toggle categories on or off to be displayed on the index
      $wp_customize->add_setting('toggle_blog_categories', array(
        'default' => 0,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_categories', array(
        'label' => __('Display Categories', 'trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_categories'
      )));



      // Toggle dates on or off to be displayed on the index
      $wp_customize->add_setting('toggle_blog_date', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_date', array(
        'label' => __('Display Post Date', 'trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_date'
      )));



      // Toggle author on or off to be displayed on the index
      $wp_customize->add_setting('toggle_blog_author', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_author', array(
        'label' => __('Display Post Author', 'trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_author'
      )));



      // Toggle comments information on or off to be displayed on the index
      $wp_customize->add_setting('toggle_blog_comments', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'skyrocket_switch_sanitization',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_comments', array(
        'label' => __('Display Post Comments Info', 'trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_comments'
      )));



      // Creates the title "No Featured Image Settings" in the "blog" section
      $wp_customize->add_setting('blog_no_featured_image_notice', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_no_featured_image_notice', array(
        'label' => __('No Featured Image Settings', 'trek'),
        'description' => __('Change the appearance of your posts if they do not have a featured image', 'trek'),
        'section' => 'blog_section',
        'settings' => 'blog_no_featured_image_notice'
      )));



      // Creating the control for the background color of the 3rd post display option if there is no featured image
        $wp_customize->add_setting('no_featured_image_color_control', array(
          'default' => get_theme_mod('header_background_color', '#1D272E'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'no_featured_image_color_control', array(
          'label' => __('Background Color of featured image box', 'trek'),
          'description' => __('This only applies if the 4th display option is chosen in the blog settings or 3rd display option is chosen in the post settings, and if no featured image is assigned to the post. The default color is your header background color, however you can change this individual setting here without affecting the header.', 'trek'),
          'section' => 'blog_section',
          'settings' => 'no_featured_image_color_control'
        )));


        // Creates title "Blog Navigation Colors" on "Blog" section
        $wp_customize->add_setting('navigation_color_control', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'navigation_color_control', array(
          'label' => __('Blog Navigation Colors', 'trek'),
          'description' => __('Change the appearance of the navigation on your blog page. The defaults of these settings correspond with the heading color settings, however you can change these settings individually here.', 'trek'),
          'section' => 'blog_section',
          'settings' => 'navigation_color_control'
        )));


        // Color control for index navigation background color
        $wp_customize->add_setting('navigation_background_color', array(
          'default' => get_theme_mod('header_background_color', '#1D272E'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_background_color', array(
          'label' => __('Background Color of Navigation', 'trek'),
          'description' => __('This changes the background color of the active page button', 'trek'),
          'section' => 'blog_section',
          'settings' => 'navigation_background_color'
        )));


        // Color control for index navigation text
        $wp_customize->add_setting('navigation_text_color', array(
          'default' => get_theme_mod('header_text_color', '#FFFFFF'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_text_color', array(
          'label' => __('Text Color of Navigation', 'trek'),
          'description' => __('This changes the text color of the active page button', 'trek'),
          'section' => 'blog_section',
          'settings' => 'navigation_text_color'
        )));




        /*
        ========================================
        SINGLE POST SETTINGS
        ========================================
        */


      // Creates the "single post" Section
      $wp_customize->add_section('singlepost_section', array(
        'title' => __('Single Post Settings', 'trek'),
        'panel' => 'theme_settings',
        'priority' => 22,
      ));



      // Creates title "Single Post Settings" in the "single post" section
      $wp_customize->add_setting('singlespost_title_section', array(
        'sanitize_callback' => 'wp_filter_nohtml_kses',
      ));


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlespost_title_section', array(
        'label' => __('Single Post Settings', 'trek'),
        'description' => __('Edit the layout of your posts', 'trek'),
        'section' => 'singlepost_section',
        'settings' => 'singlespost_title_section'
      )));



      // Toggle sidebar on or off for Single posts
      $wp_customize->add_setting('single_toggle_sidebar', array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_hex_color',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'single_toggle_sidebar', array(
        'label' => __('Display Sidebar', 'trek'),
        'section' => 'singlepost_section',
        'settings'=> 'single_toggle_sidebar'
      )));



      // Creates the setting for the user to choose the layout of their single posts
      $wp_customize->add_setting( 'singlepost_layout_radio_button',
          array(
            'default' => 'singlefullimage',
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_radio_sanitization'
          )
        );
        $wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'singlepost_layout_radio_button',
          array(
            'label' => __( 'Single Post Layout', 'trek' ),
            'description' => esc_html__( 'Choose the layout of your posts', 'trek' ),
            'section' => 'singlepost_section',
            'settings' => 'singlepost_layout_radio_button',
            'choices' => array(
              'singlefullimage' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'img/singlefullimage.png',
                'name' => __( 'Full Image Layout', 'trek' )
              ),
              'singlebannerimage' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'img/singletextoverimage.png',
                'name' => __( 'Banner Image Layout', 'trek' )
              ),
              'singletextoverimage' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'img/singlebannerimage.png',
                'name' => __( 'Text Over Image Layout', 'trek' )
              ),
            )
          )
        ) );



        // Creates the title "Single Post Header Display Settings" in the "Single Post" section
        $wp_customize->add_setting('singlespost_display_section', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlespost_display_section', array(
          'label' => __('Single Post Header Display Settings', 'trek'),
          'description' => __('Choose what information to display on your individual posts header', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'singlespost_display_section'
        )));



        // Toggle categories on or off for single posts
        $wp_customize->add_setting('toggle_singlepost_categories', array(
          'default' => 0,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_categories', array(
          'label' => __('Display Categories', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_categories'
        )));



        // Toggle date on or off for single posts
        $wp_customize->add_setting('toggle_singlepost_date', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_date', array(
          'label' => __('Display Post Date', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_date'
        )));



        // Toggle author on or off for single posts
        $wp_customize->add_setting('toggle_singlepost_author', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_author', array(
          'label' => __('Display Post Author', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_author'
        )));



        // Toggle comments information display on or off for single posts
        $wp_customize->add_setting('toggle_singlepost_comments', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_comments', array(
          'label' => __('Display Post Comments Info', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_comments'
        )));


        $wp_customize->add_setting('singlespost_footerdisplay_section', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlespost_footerdisplay_section', array(
          'label' => __('Single Post Footer Display Settings', 'trek'),
          'description' => __('Choose what information to display on your individual posts footer', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'singlespost_footerdisplay_section'
        )));



        // Toggle tags on or off on single posts
        $wp_customize->add_setting('toggle_singlepost_tags', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_tags', array(
          'label' => __('Display Post Tags', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_tags'
        )));



        // Toggle view count on or off
        $wp_customize->add_setting('toggle_singlepost_views', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_views', array(
          'label' => __('Display Post View Count', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_views'
        )));




        // Creates title "Single Post Navigation Color Controls" on "single post" section
        $wp_customize->add_setting('singlepost_navigation_notice', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlepost_navigation_notice', array(
          'label' => __('Single Post Navigation Color Controls', 'trek'),
          'description' => __('The defaults color settings for your navigation correspond to the colors of your header. However you can change these individually here.', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'singlepost_navigation_notice'
        )));



        // Color controls for background-color of single navigation
        $wp_customize->add_setting('single_navigation_background_color', array(
          'default' => get_theme_mod('header_background_color', '#1D272E'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_navigation_background_color', array(
          'label' => __('Background Color of Navigation', 'trek'),
          'description' => __('This changes the background color of the navigation bar', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'single_navigation_background_color'
        )));



        // Color controls for color of single navigation
        $wp_customize->add_setting('single_navigation_text_color', array(
          'default' => get_theme_mod('header_text_color', '#FFFFFF'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_navigation_text_color', array(
          'label' => __('Text Color of Navigation', 'trek'),
          'description' => __('This changes the text color of the link', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'single_navigation_text_color'
        )));



        // Color controls for color of single navigation on hover
        $wp_customize->add_setting('single_navigation_text_hover_color', array(
          'default' => get_theme_mod('header_text_hover_color', '#E4BCE4'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_navigation_text_hover_color', array(
          'label' => __('Text Hover Color of Navigation', 'trek'),
          'description' => __('This changes the text hover color of the link', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'single_navigation_text_hover_color'
        )));



        // Creates title "Single Post Author Box Controls" on "single post" section
        $wp_customize->add_setting('singlepost_authorbox_notice', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlepost_authorbox_notice', array(
          'label' => __('Single Post Author Box Controls', 'trek'),
          'description' => __('An author box lives at the bottom of your posts and tells the reader some information about the author. This information can be edited in the users section in the dashboard.', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'singlepost_authorbox_notice'
        )));


        // Toggle author box on or off for single posts
        $wp_customize->add_setting('toggle_singlepost_authorbox', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_authorbox', array(
          'label' => __('Display Author Box', 'trek'),
          'description' => __('If your blog has only one user, this might not be necessary.', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_authorbox'
        )));




        /*
        ========================================
        ARCHIVE SETTINGS
        ========================================
        */



        // Creating the "Archive and Search Settings" section
        $wp_customize->add_section('archive_section', array(
          'title' => __('Archive and Search Settings', 'trek'),
          'panel' => 'theme_settings',
          'priority' => 23,
        ));



        // Creates the title "Archive/Search Results Bar Settings" in "Archive and Search Settings" section
        $wp_customize->add_setting('archive_navtitle_section', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'archive_navtitle_section', array(
          'label' => __('Archive/Search Results Bar Settings', 'trek'),
          'description' => __('Choose the colors of your archive and search navigation bar', 'trek'),
          'section' => 'archive_section',
          'settings' => 'archive_navtitle_section'
        )));



        // Color Control for Archive Nav Bar Background Color
        $wp_customize->add_setting('archive_navbar_backgroundcolor', array(
          'default' => get_theme_mod('header_background_color', '#1d272e'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'archive_navbar_backgroundcolor', array(
          'label' => __('Background Color', 'trek'),
          'section' => 'archive_section',
          'settings' => 'archive_navbar_backgroundcolor'
        )));



        // Color Control for Archive Nav Bar Text Color
        $wp_customize->add_setting('archive_navbar_textcolor', array(
          'default' => get_theme_mod('header_text_color', '#FFFFFF'),
          'transport' => 'refresh',
          'sanitize_callback' => 'sanitize_hex_color',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'archive_navbar_textcolor', array(
          'label' => __('Text Color', 'trek'),
          'section' => 'archive_section',
          'settings' => 'archive_navbar_textcolor'
        )));



        // Creates title "Archive and Search Settings" in "Archive and Search Settings" section
        $wp_customize->add_setting('archive_title_section', array(
          'sanitize_callback' => 'wp_filter_nohtml_kses',
        ));


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'archive_title_section', array(
          'label' => __('Archive and Search Settings', 'trek'),
          'description' => __('Edit the layout of your archives', 'trek'),
          'section' => 'archive_section',
          'settings' => 'archive_title_section'
        )));



        // Toggle Sidebar on or off for Archive
        $wp_customize->add_setting('archive_toggle_sidebar', array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'skyrocket_switch_sanitization',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'archive_toggle_sidebar', array(
          'label' => __('Display Sidebar', 'trek'),
          'section' => 'archive_section',
          'settings'=> 'archive_toggle_sidebar'
        )));



        // Creates the setting for the user to choose the layout of their archive
        $wp_customize->add_setting( 'archive_preview_layout_radio_button',
      			array(
      				'default' => 'archive-liststyle',
      				'transport' => 'refresh',
      				'sanitize_callback' => 'skyrocket_radio_sanitization'
      			)
      		);
      		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'archive_preview_layout_radio_button',
      			array(
      				'label' => __( 'Archive Layout', 'trek' ),
      				'description' => esc_html__( 'Choose the layout of your archive pages', 'trek' ),
      				'section' => 'archive_section',
              'settings' => 'archive_preview_layout_radio_button',
      				'choices' => array(
      					'archive-fullimage' => array(
      						'image' => trailingslashit( get_template_directory_uri() ) . 'img/fullimage.png',
      						'name' => __( 'Full Image Layout', 'trek' )
      					),
      					'archive-liststyle' => array(
      						'image' => trailingslashit( get_template_directory_uri() ) . 'img/liststyle.png',
      						'name' => __( 'List Style Layout', 'trek' )
      					),
                'archive-liststylereversed' => array(
      						'image' => trailingslashit( get_template_directory_uri() ) . 'img/liststylereversed.png',
      						'name' => __( 'List Style Reversed Layout', 'trek' )
      					),
                'archive-textoverimage' => array(
      						'image' => trailingslashit( get_template_directory_uri() ) . 'img/textoverimage.png',
      						'name' => __( 'Text Over Image Layout', 'trek' )
      					),
      				)
      			)
      		) );


          // Creates title "Archive Meta Display Settings" in "Archive and Search Settings" section
          $wp_customize->add_setting('archive_displaytitle_section', array(
            'sanitize_callback' => 'wp_filter_nohtml_kses',
          ));


          $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'archive_displaytitle_section', array(
            'label' => __('Archive Meta Display Settings', 'trek'),
            'description' => __('Choose what post information to display on each post on your archive pages', 'trek'),
            'section' => 'archive_section',
            'settings' => 'archive_displaytitle_section'
          )));



          // Archive Categories On or Off
          $wp_customize->add_setting('toggle_archive_categories', array(
            'default' => 0,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_archive_categories', array(
            'label' => __('Display Categories', 'trek'),
            'section' => 'archive_section',
            'settings'=> 'toggle_archive_categories'
          )));



          // Archive Date On or Off
          $wp_customize->add_setting('toggle_archive_date', array(
            'default' => 1,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_archive_date', array(
            'label' => __('Display Post Date', 'trek'),
            'section' => 'archive_section',
            'settings'=> 'toggle_archive_date'
          )));



          // Archive Author On or Off
          $wp_customize->add_setting('toggle_archive_author', array(
            'default' => 1,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_archive_author', array(
            'label' => __('Display Post Author', 'trek'),
            'section' => 'archive_section',
            'settings'=> 'toggle_archive_author'
          )));



          // Archive Comments Info On or Off
          $wp_customize->add_setting('toggle_archive_comments', array(
            'default' => 1,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_archive_comments', array(
            'label' => __('Display Post Comments Info', 'trek'),
            'section' => 'archive_section',
            'settings'=> 'toggle_archive_comments'
          )));







          /*
          ========================================
          FONTS SETTINGS
          ========================================
          */



          // Creating the "Fonts" section
          $wp_customize->add_section('fonts_section', array(
            'title' => __('Accent Fonts', 'trek'),
            'panel' => 'theme_settings',
            'priority' => 24,
          ));

          // Creates the title "Blog Title" in "Fonts" section
          $wp_customize->add_setting('fonts_blogtitlefontitle_section', array(
            'sanitize_callback' => 'wp_filter_nohtml_kses',
          ));


          $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'fonts_blogtitlefontitle_section', array(
            'label' => __('Blog Title', 'trek'),
            'description' => __('In this section you can change the accent font choices for your blog. Please note the font size setting does not alter your website when viewed on a mobile device. The Blog Title Font settings affect your blog title on your homepage and in the blog banner. Please note if the italic / bold switch is turned on and you see no change, this font does not allow this option.', 'trek'),
            'section' => 'fonts_section',
            'settings' => 'fonts_blogtitlefontitle_section'
          )));


          // Add a Google Font control for Blog Title
          $wp_customize->add_setting( 'blog_title_font_control', array(
            'default'        => 127,
            'sanitize_callback' => 'absint',
         ) );

         $wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'blog_title_font_control', array(
            'label'   => __('Blog Title Font Selector', 'trek' ),
            'section' => 'fonts_section',
            'settings'   => 'blog_title_font_control',
          ) ) );

          // Creates the Slider for Blog Title Font Size
          $wp_customize->add_setting( 'slider_blogtitlefont_size', array(
            'default' => 1.5,
            'transport' => 'refresh',
          ));

          $wp_customize->add_control( new Skyrocket_Slider_Custom_Control( $wp_customize, 'slider_blogtitlefont_size', array(
            'label' => __('Font Size', 'trek'),
            'section' => 'fonts_section',
            'settings' => 'slider_blogtitlefont_size',
            'input_attrs' => array(
              'min' => 1.0,
              'max' => 2.0,
              'step' => 0.1,
            ),
          )));

          // Creates the Slider for Blog Title letter spacing
          $wp_customize->add_setting( 'slider_blogtitlefont_letterspacing', array(
            'default' => 4,
            'transport' => 'refresh',
          ));

          $wp_customize->add_control( new Skyrocket_Slider_Custom_Control( $wp_customize, 'slider_blogtitlefont_letterspacing', array(
            'label' => __('Letter Spacing', 'trek'),
            'section' => 'fonts_section',
            'settings' => 'slider_blogtitlefont_letterspacing',
            'input_attrs' => array(
              'min' => 0,
              'max' => 7,
              'step' => 1,
            ),
          )));


          // Toggle to make Blog Title Font Italic
          $wp_customize->add_setting('toggle_blogtitlefont_italic', array(
            'default' => 0,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blogtitlefont_italic', array(
            'label' => __('Italic', 'trek'),
            'section' => 'fonts_section',
            'settings'=> 'toggle_blogtitlefont_italic',
          )));


          // Toggle to make Blog Title Font Bold
          $wp_customize->add_setting('toggle_blogtitlefont_bold', array(
            'default' => 1,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blogtitlefont_bold', array(
            'label' => __('Bold', 'trek'),
            'section' => 'fonts_section',
            'settings'=> 'toggle_blogtitlefont_bold',
          )));


          // Creates the title "Posts & Pages Title Font" in "Fonts" section
          $wp_customize->add_setting('fonts_postspagesfontitle_section', array(
            'sanitize_callback' => 'wp_filter_nohtml_kses',
          ));


          $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'fonts_postspagesfontitle_section', array(
            'label' => __('Posts and Pages Title Font', 'trek'),
            'description' => __('The Post & Page Title Font settings affect the titles of all your posts and pages. ', 'trek'),
            'section' => 'fonts_section',
            'settings' => 'fonts_postspagesfontitle_section'
          )));


          // Add a Google Font control for Posts and Pages Title Font
          $wp_customize->add_setting( 'postsandpagestitle_font_control', array(
            'default'        => 127,
            'sanitize_callback' => 'absint',
         ) );

         $wp_customize->add_control( new Google_Font_Dropdown_Custom_Control( $wp_customize, 'postsandpagestitle_font_control', array(
            'label'   => __('Posts and Pages Title Font', 'trek' ),
            'section' => 'fonts_section',
            'settings'   => 'postsandpagestitle_font_control',
          ) ) );


          // Creates the Slider for Posts and Pages Title Font Size
          $wp_customize->add_setting( 'slider_postpagesfont_size', array(
            'default' => 1.9,
            'transport' => 'refresh',
          ));

          $wp_customize->add_control( new Skyrocket_Slider_Custom_Control( $wp_customize, 'slider_postpagesfont_size', array(
            'label' => __('Font Size', 'trek'),
            'section' => 'fonts_section',
            'settings' => 'slider_postpagesfont_size',
            'input_attrs' => array(
              'min' => 1.0,
              'max' => 2.5,
              'step' => 0.1,
            ),
          )));

          // Creates the Slider for posts and pages Title letter spacing
          $wp_customize->add_setting( 'slider_postsandpagesfont_letterspacing', array(
            'default' => 3,
            'transport' => 'refresh',
          ));

          $wp_customize->add_control( new Skyrocket_Slider_Custom_Control( $wp_customize, 'slider_postsandpagesfont_letterspacing', array(
            'label' => __('Letter Spacing', 'trek'),
            'section' => 'fonts_section',
            'settings' => 'slider_postsandpagesfont_letterspacing',
            'input_attrs' => array(
              'min' => 0,
              'max' => 7,
              'step' => 1,
            ),
          )));

          // Toggle to make post and pages Title Font Italic
          $wp_customize->add_setting('toggle_postandpagestitlefont_italic', array(
            'default' => 0,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_postandpagestitlefont_italic', array(
            'label' => __('Italic', 'trek'),
            'section' => 'fonts_section',
            'settings'=> 'toggle_postandpagestitlefont_italic',
          )));


          // Toggle to make post and pages Title Font Bold
          $wp_customize->add_setting('toggle_postandpagestitlefont_bold', array(
            'default' => 1,
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_switch_sanitization',

          ));

          $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_postandpagestitlefont_bold', array(
            'label' => __('Bold', 'trek'),
            'section' => 'fonts_section',
            'settings'=> 'toggle_postandpagestitlefont_bold',
          )));


















          $wp_customize->add_section( new Skyrocket_Upsell_Section( $wp_customize, 'upsell_section',
			array(
				'title' => __( 'Click For Theme Set Up Instructions', 'trek' ),
				'url' => 'https://www.lucyisobelsetup.online/installinstructions/trek/',
        'panel' => 'theme_settings',
				'backgroundcolor' => '#1D272E',
				'textcolor' => '#fff',
				'priority' => 100,
			)
		) );








}

$homepage_background_image = get_theme_mod( 'homepage_background_image' );

add_action('customize_register', 'trek_lucyisobel_custom_settings');


// Adding the styles from the customiser for the header in the head of the website.
 function trek_customizer_css() { ?>
  <style type="text/css">

    .headerbackgroundcolor {
      background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;
    }

    .headerTextColor {
      color: <?php echo get_theme_mod('header_text_color', '#ffffff' ); ?>;
    }

    .headerTextColor a {
      color: <?php echo get_theme_mod('header_text_color', '#ffffff' ); ?>;
    }

    .headerTextColor i {
      color: <?php echo get_theme_mod('header_text_color', '#ffffff' ); ?>;
    }

    .headerTextColor a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
    }

    .headerTextColor i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
    }

    .menucenter-socialmedia-container li i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
    }

    .menuright-socialmedia-search-container li i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
    }

    .menuleft-socialmedia-container li i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
    }

    .menucenter-menu-container li a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
      transition-duration: 0.5s;
    }

    .menuright-menu-container li a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
      transition-duration: 0.5s;
    }

    .menuleft-menu-container li a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
      transition-duration: 0.5s;
    }

    .homepage-title-container a  {
      color: <?php echo get_theme_mod('homepage_title_color', '#FFFFFF' ); ?>;
      text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color', '#000000' ); ?> 5px 5px;
      transition-duration: 1s;
    }

    .homepage-title-container a:hover {
        color: <?php echo get_theme_mod('homepage_title_link_color', '#e4bce4' ); ?>;
        transition-duration: 1s;
    }

    .homepage-whole-body-container {
      background: url('<?php echo $homepage_background_image; ?>');
      background-position: center center;
      background-size: cover;
    }


    .homepage-readmore-button-container a {
      color: <?php echo get_theme_mod('homepage_readmore_text_color', '#FFFFFF'); ?>;
      transition-duration: 0.5s;

    }

    .homepage-readmore-button-container a:hover {
      color: <?php echo get_theme_mod('homepage_readmore_text_hover_color', '#e4bce4' ); ?>;
      transition-duration: 0.5s;
    }

    .homepage-description-container {
      color: <?php echo get_theme_mod('homepage_description_color', '#FFFFFF'); ?>;
      text-shadow: <?php echo get_theme_mod('homepage_description_shadow_color', '#000000'); ?>;
    }

  </style>
<?php }

add_action( 'wp_head', 'trek_customizer_css', 999 );
