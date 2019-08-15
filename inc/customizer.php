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

  $wp_customize->add_panel( 'theme_settings', array(
    'priority' => 0,
    'title' => 'Your Theme Options',

  ));


  //creating header layout section
  $wp_customize->add_section('header_section', array(
    'title' => __('Header and footer', 'Trek'),
    'priority' => 0,
    'panel' => 'theme_settings',
  ));


  //creating notice for header section
  $wp_customize->add_setting('header_title_notice_setting');


  $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'header_title_notice_control', array(
    'label' => __('Header & Footer Settings', 'Trek'),
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


    //header title color notice
    $wp_customize->add_setting('header_title_color_section');


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'header_title_color_section', array(
      'label' => __('Header & Footer Color Settings', 'Trek'),
      'description' => __('Select your header color scheme'),
      'section' => 'header_section',
      'settings' => 'header_title_color_section'
    )));



    //creating header background color control
    $wp_customize->add_setting('header_background_color', array(
      'default' => '#1d272e',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_background_color', array(
      'label' => __('Header and Footer background color', 'Trek'),
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



      //creating the header text HOVER color controls
        $wp_customize->add_setting('header_text_hover_color', array(
          'default' => '#E4BCE4',
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_text_hover_color', array(
          'label' => __('Header and Footer Text Hover Color', 'Trek'),
          'section' => 'header_section',
          'settings' => 'header_text_hover_color'
        )));



      //SOCIAL MEDIA SECTION

      //creating the social media SECTION
      $wp_customize->add_section('socialmedia_section', array(
        'title' => __('Social Media', 'Trek'),
        'priority' => 10,
        'panel' => 'theme_settings',
      ));

      //creating notice for socialmedia section
      $wp_customize->add_setting('socialmedia_title_section');


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'socialmedia_title_section', array(
        'label' => __('Social Media Settings', 'Trek'),
        'description' => __('Add the links to your social media'),
        'section' => 'socialmedia_section',
        'settings' => 'socialmedia_title_section'
      )));


      //twitter
      $wp_customize->add_setting('toggle_switch_twitter', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_twitter', array(
        'label' => __('Twitter', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_twitter'
      )));


      $wp_customize->add_setting('twitter_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'twitter_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'twitter_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Twitter link here'),
        )

      )));


      //facebook
      $wp_customize->add_setting('toggle_switch_facebook', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_facebook', array(
        'label' => __('Facebook', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_facebook'
      )));


      $wp_customize->add_setting('facebook_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'facebook_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'facebook_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Facebook link here'),
        )

      )));


      //instagram
      $wp_customize->add_setting('toggle_switch_instagram', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_instagram', array(
        'label' => __('Instagram', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_instagram'
      )));


      $wp_customize->add_setting('instagram_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'instagram_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'instagram_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Instagram link here'),
        )

      )));



      //pinterest
      $wp_customize->add_setting('toggle_switch_pinterest', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_pinterest', array(
        'label' => __('Pinterest', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_pinterest'
      )));


      $wp_customize->add_setting('pinterest_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'pinterest_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'pinterest_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Pinterest link here'),
        )

      )));



      //google plus
      $wp_customize->add_setting('toggle_switch_googleplus', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_googleplus', array(
        'label' => __('Google Plus', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_googleplus'
      )));


      $wp_customize->add_setting('googleplus_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'googleplus_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'googleplus_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Google Plus link here'),
        )

      )));




      //YouTube
      $wp_customize->add_setting('toggle_switch_youtube', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_youtube', array(
        'label' => __('YouTube', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_youtube'
      )));


      $wp_customize->add_setting('youtube_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'youtube_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'youtube_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your YouTube link here'),
        )

      )));



      //LinkedIn
      $wp_customize->add_setting('toggle_switch_linkedin', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_linkedin', array(
        'label' => __('LinkedIn', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_linkedin'
      )));


      $wp_customize->add_setting('linkedin_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'linkedin_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'linkedin_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your LinkedIn link here'),
        )

      )));



      //snapchat
      $wp_customize->add_setting('toggle_switch_snapchat', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_snapchat', array(
        'label' => __('Snapchat', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_snapchat'
      )));


      $wp_customize->add_setting('snapchat_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'snapchat_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'snapchat_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Snapchat link here'),
        )

      )));


      //goodreads
      $wp_customize->add_setting('toggle_switch_goodreads', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_goodreads', array(
        'label' => __('Goodreads', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_goodreads'
      )));


      $wp_customize->add_setting('goodreads_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'goodreads_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'goodreads_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Goodreads link here'),
        )

      )));


      //shop
      $wp_customize->add_setting('toggle_switch_shop', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_shop', array(
        'label' => __('Shop', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_shop'
      )));


      $wp_customize->add_setting('shop_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'shop_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'shop_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Shop link here'),
        )

      )));




      //email
      $wp_customize->add_setting('toggle_switch_email', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_email', array(
        'label' => __('Email', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_email'
      )));


      $wp_customize->add_setting('email_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'email_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'email_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your email address here'),
        )

      )));



      //vimeo
      $wp_customize->add_setting('toggle_switch_vimeo', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_vimeo', array(
        'label' => __('Vimeo', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_vimeo'
      )));


      $wp_customize->add_setting('vimeo_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'vimeo_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'vimeo_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Vimeo link here'),
        )

      )));


      //tumblr
      $wp_customize->add_setting('toggle_switch_tumblr', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_tumblr', array(
        'label' => __('Tumblr', 'Trek'),
        'section' => 'socialmedia_section',
        'settings'=> 'toggle_switch_tumblr'
      )));


      $wp_customize->add_setting('tumblr_link', array(

      ));

      $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'tumblr_link', array(
        'section' => 'socialmedia_section',
        'settings' => 'tumblr_link',
        'input_attrs' => array(
          'placeholder' => __('Paste your Tumblr link here'),
        )

      )));




      //HOMEPAGE section
      //creating header layout section
      $wp_customize->add_section('homepage_section', array(
        'title' => __('Homepage', 'Trek'),
        'panel' => 'theme_settings',
        'priority' => 20,
      ));

      //homepage notice
      $wp_customize->add_setting('homepage_title_section');


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_title_section', array(
        'label' => __('Homepage Settings', 'Trek'),
        'description' => __('Edit your homepage to suit you'),
        'section' => 'homepage_section',
        'settings' => 'homepage_title_section'
      )));


      //HOMEPAGE  section
      $wp_customize->add_setting('homepage_background_image');

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_background_image', array(
        'label' => __('Homepage Background Image', 'Trek'),
        'description' => __('Choose an image to be the background of your homepage'),
        'section' => 'homepage_section',
        'settings' => 'homepage_background_image',


      )));


      //homepage title settings notice
      $wp_customize->add_setting('homepage_title_title_section');


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_title_title_section', array(
        'label' => __('Homepage Title Settings', 'Trek'),
        'description' => __('Edit your homepage title appearance'),
        'section' => 'homepage_section',
        'settings' => 'homepage_title_title_section'
      )));


      //homepage title height
      $wp_customize->add_setting( 'homepage_title_height', array(
        'default' => 30,
        'transport' => 'refresh',
        'sanitize_callback' => 'absint'
      ));

      $wp_customize->add_control( new Skyrocket_Slider_Custom_Control( $wp_customize, 'homepage_title_height', array(
        'label' => __('Title Height (vh)', 'Trek'),
        'section' => 'homepage_section',
      'settings' => 'homepage_title_height',
      'input_attrs' => array(
        'min' => 10,
        'max' => 60,
        'step' => 1,
      ),
    )));


    //toggle description on and off
    $wp_customize->add_setting('toggle_switch_description', array(
      'default' => 1,
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_switch_description', array(
      'label' => __('Display Description', 'Trek'),
      'section' => 'homepage_section',
      'settings'=> 'toggle_switch_description'
    )));


    //homepage title color controls
    $wp_customize->add_setting('homepage_title_color', array(
      'default' => '#000000',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_color', array(
      'label' => __('Title Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_color'
    )));


    //homepage title text shadow color controls
    $wp_customize->add_setting('homepage_title_shadow_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_shadow_color', array(
      'label' => __('Title Shadow Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_shadow_color'
    )));


    //homepage description text color controls
    $wp_customize->add_setting('homepage_description_color', array(
      'default' => '#000000',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_description_color', array(
      'label' => __('Description Color', 'Trek'),
      'description' => __('Will only display if description toggle is on', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_description_color'
    )));

    //homepage description text shadow color controls
    $wp_customize->add_setting('homepage_description_shadow_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_description_shadow_color', array(
      'label' => __('Description Shadow Color', 'Trek'),
      'description' => __('Will only display if description toggle is on', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_description_shadow_color'
    )));


    //homepage read more button notice
    $wp_customize->add_setting('homepage_readmore_button_notice');


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_readmore_button_notice', array(
      'label' => __('Read More Button', 'Trek'),
      'description' => __('Link your blog from your homepage'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_button_notice'
    )));



    //homepage readmore button color
    $wp_customize->add_setting('homepage_readmore_color', array(
      'default' => '#1D272E',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_color', array(
      'label' => __('Read More Button Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_color'
    )));


    //homepage readmore button text color
    $wp_customize->add_setting('homepage_readmore_text_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_text_color', array(
      'label' => __('Read More Button Text Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text_color'
    )));



    //homepage readmore button text hover color
    $wp_customize->add_setting('homepage_readmore_text_hover_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_text_hover_color', array(
      'label' => __('Read More Button Text Hover Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text_hover_color'
    )));


    //read more button link
    $wp_customize->add_setting('homepage_readmore_link', array(

    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'homepage_readmore_link', array(
      'label' => 'Link to your blog',
      'description' => 'Make sure your readers can access your blog',
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_link',
      'input_attrs' => array(
        'placeholder' => __('Paste the link to your blog here'),
      )

    )));



    $wp_customize->add_setting('homepage_readmore_text', array(
      'default' => 'Read More',
    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'homepage_readmore_text', array(
      'label' => 'Read More button text',
      'description' => 'Change the text for your blog link',
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text',
      'input_attrs' => array(
        'placeholder' => __('Read More'),
      )

    )));



    //BLOG section
    //creating the blog settings section
    $wp_customize->add_section('blog_section', array(
      'title' => __('Blog Settings', 'Trek'),
      'panel' => 'theme_settings',
      'priority' => 21,
    ));

    //homepage notice
    $wp_customize->add_setting('blog_title_section');


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_title_section', array(
      'label' => __('Blog Page Settings', 'Trek'),
      'description' => __('Edit the appearance of your blog page'),
      'section' => 'blog_section',
      'settings' => 'blog_title_section'
    )));



    //creating sidebar layout radio control
    $wp_customize->add_setting( 'sidebar_layout_radio_button',
  			array(
  				'default' => 'sidebarright',
  				'transport' => 'refresh',
  				'sanitize_callback' => 'skyrocket_radio_sanitization'
  			)
  		);
  		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'sidebar_layout_radio_button',
  			array(
  				'label' => __( 'Sidebar Layout', 'Trek' ),
  				'description' => esc_html__( 'Choose which side your sidebar is on', 'Trek' ),
  				'section' => 'blog_section',
          'settings' => 'sidebar_layout_radio_button',
  				'choices' => array(
  					'sidebarright' => array(
  						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarright.png',
  						'name' => __( 'Sidebar right aligned', 'Trek' )
  					),
  					'sidebarleft' => array(
  						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarleft.png',
  						'name' => __( 'Sidebar left aligned', 'Trek' )
  					),
  				)
  			)
  		) );

      //blog background-color control
      $wp_customize->add_setting('blog_page_background_color', array(
        'default' => '#e2d7e2',
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_page_background_color', array(
        'label' => __('Blog Background Color', 'Trek'),
        'section' => 'blog_section',
        'settings' => 'blog_page_background_color'
      )));

      //creating post preview layout
      $wp_customize->add_setting( 'post_preview_layout_radio_button',
    			array(
    				'default' => 'widepostlayout',
    				'transport' => 'refresh',
    				'sanitize_callback' => 'skyrocket_radio_sanitization'
    			)
    		);
    		$wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'post_preview_layout_radio_button',
    			array(
    				'label' => __( 'Post Preview Layout', 'Trek' ),
    				'description' => esc_html__( 'Choose which side your sidebar is on', 'Trek' ),
    				'section' => 'blog_section',
            'settings' => 'post_preview_layout_radio_button',
    				'choices' => array(
    					'widepostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarright.png',
    						'name' => __( 'Wide Layout', 'Trek' )
    					),
    					'gridrightpostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarleft.png',
    						'name' => __( 'List Right Aligned Layout', 'Trek' )
    					),
              'gridleftpostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/Groupsidebarleft.png',
    						'name' => __( 'List Left Aligned Layout', 'Trek' )
    					),
    				)
    			)
    		) );



      //post preview display settings notice
      $wp_customize->add_setting('blog_post_preview_settings_notice');


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_post_preview_settings_notice', array(
        'label' => __('Post Preview Display Settings', 'Trek'),
        'description' => __('Edit the appearance of your posts'),
        'section' => 'blog_section',
        'settings' => 'blog_post_preview_settings_notice'
      )));

      //blog link color
      $wp_customize->add_setting('blog_page_link_color', array(
        'default' => '#1D272E',
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_page_link_color', array(
        'label' => __('Blog Post Link Color', 'Trek'),
        'section' => 'blog_section',
        'settings' => 'blog_page_link_color'
      )));


      //blog link hover color
      $wp_customize->add_setting('blog_page_link_hover_color', array(
        'default' => '#E4BCE4',
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'blog_page_link_hover_color', array(
        'label' => __('Blog Post Link Hover Color', 'Trek'),
        'section' => 'blog_section',
        'settings' => 'blog_page_link_hover_color'
      )));






      //toggle categories on or off
      $wp_customize->add_setting('toggle_blog_categories', array(
        'default' => 1,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_categories', array(
        'label' => __('Display Categories', 'Trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_categories'
      )));

      //toggle date on or off
      $wp_customize->add_setting('toggle_blog_date', array(
        'default' => 1,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_date', array(
        'label' => __('Display Post Date', 'Trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_date'
      )));

      //toggle author on or off
      $wp_customize->add_setting('toggle_blog_author', array(
        'default' => 1,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_author', array(
        'label' => __('Display Post Author', 'Trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_author'
      )));

      //toggle comments on or off
      $wp_customize->add_setting('toggle_blog_comments', array(
        'default' => 1,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blog_comments', array(
        'label' => __('Display Post Comments Info', 'Trek'),
        'section' => 'blog_section',
        'settings'=> 'toggle_blog_comments'
      )));















}

$homepage_background_image = get_theme_mod( 'homepage_background_image' );

add_action('customize_register', 'trek_lucyisobel_custom_settings');


//adding the styles in the head of the website
function trek_customizer_css(){ ?>
  <style type="text/css">

    .headerbackgroundcolor {
      background-color: <?php echo get_theme_mod('header_background_color'); ?>;
    }

    .headerTextColor {
      color: <?php echo get_theme_mod('header_text_color'); ?>;
    }

    .headerTextColor a {
      color: <?php echo get_theme_mod('header_text_color'); ?>;
    }

    .headerTextColor i {
      color: <?php echo get_theme_mod('header_text_color'); ?>;
    }

    .menucenter-socialmedia-container li i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
    }

    .menuright-socialmedia-search-container li i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
    }

    .menuleft-socialmedia-container li i:hover {
      color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
    }

    .menucenter-menu-container li a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
      transition-duration: 0.5s;
    }

    .menuright-menu-container li a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
      transition-duration: 0.5s;
    }

    .menuleft-menu-container li a:hover {
      color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
      transition-duration: 0.5s;
    }

    .homepage-whole-body-container {
      background: url('<?php echo $homepage_background_image; ?>');
      background-position: center center;
      background-size: cover;
    }






  </style>
<?php }

add_action('wp_head', 'trek_customizer_css');
