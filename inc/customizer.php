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
        'label' => __('Homepage Background Settings', 'Trek'),
        'description' => __('Edit your homepage to suit you'),
        'section' => 'homepage_section',
        'settings' => 'homepage_title_section'
      )));


      //HOMEPAGE  section
      $wp_customize->add_setting('homepage_background_image');

      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'homepage_background_image', array(
        'label' => __('Use Image as Background', 'Trek'),
        'description' => __("Choose an image to be the background of your homepage. It is highly recommended this image is of a high quality. Please note if the setting below 'Use Video as Background' is turned on, then this image won't be displayed. "),
        'section' => 'homepage_section',
        'settings' => 'homepage_background_image',


      )));




      //toggle video // image background
      $wp_customize->add_setting('homepage_video_toggle', array(
        'default' => 0,
        'transport' => 'refresh',

      ));

      $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_video_toggle', array(
        'label' => __('Use Video as Background', 'Trek'),
        'description' => __("This will play a muted loop of a video of your choice. This setting uses a YouTube or Vimeo embed as your background, therefore your chosen video must be uploaded to either site first. Embedding the video from another site leaves more storage for your blog's content as well displays the video at the best quality possible!" , 'trek'),
        'section' => 'homepage_section',
        'settings'=> 'homepage_video_toggle'
      )));



        $wp_customize->add_setting('video_background_link', array(

        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'video_background_link', array(
          'section' => 'homepage_section',
          'label' => __('Video link', 'trek'),
          'description' => __('This is a very specific link needed. Please watch this <b>video</b> to see how to find it.', 'trek'),
          'settings' => 'video_background_link',
          'input_attrs' => array(
            'placeholder' => __('Paste the link here'),
          )

        )));


        $wp_customize->add_setting('video_playlist_link', array(

        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'video_playlist_link', array(
          'section' => 'homepage_section',
          'label' => __('Video 2nd Link', 'trek'),
          'description' => __('This is also a very specific link needed. Please watch this <b>video</b> to see how to find it.', 'trek'),
          'settings' => 'video_playlist_link',
          'input_attrs' => array(
            'placeholder' => __('Paste the link here'),
          )

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



    //homepage title color controls
    $wp_customize->add_setting('homepage_title_color', array(
      'default' => '#FFFFFF',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_color', array(
      'label' => __('Title Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_color'
    )));


    //homepage title text shadow color controls
    $wp_customize->add_setting('homepage_title_shadow_color', array(
      'default' => '#000000',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_shadow_color', array(
      'label' => __('Title Shadow Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_shadow_color'
    )));


    //homepage title hover color controls
    $wp_customize->add_setting('homepage_title_link_color', array(
      'default' => '#e4bce4',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_title_link_color', array(
      'label' => __('Title Hover Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_title_link_color'
    )));


    //toggle title letter spacing on and off
    $wp_customize->add_setting('homepage_title_letterspacing_toggle', array(
      'default' => 1,
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_title_letterspacing_toggle', array(
      'label' => __('Increase Letter Spacing', 'Trek'),
      'description' => __('This setting increases the letter spacing when the mouse hovers over the title', 'trek'),
      'section' => 'homepage_section',
      'settings'=> 'homepage_title_letterspacing_toggle'
    )));

    //rblog link
    $wp_customize->add_setting('homepage_blog_link', array(

    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'homepage_blog_link', array(
      'label' => 'Link to your blog',
      'description' => 'Make sure your readers can access your blog',
      'section' => 'homepage_section',
      'settings' => 'homepage_blog_link',
      'input_attrs' => array(
        'placeholder' => __('Paste the link to your blog here'),
      )

    )));



    //homepage description settings notice
    $wp_customize->add_setting('homepage_description_title_section');


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'homepage_description_title_section', array(
      'label' => __('Homepage Description Settings', 'Trek'),
      'description' => __('Edit your homepage description appearance'),
      'section' => 'homepage_section',
      'settings' => 'homepage_description_title_section'
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


    //toggle read more button on off
    $wp_customize->add_setting('homepage_readmore_toggle', array(
      'default' => 1,
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'homepage_readmore_toggle', array(
      'label' => __('Show Button', 'Trek'),
      'description' => __('Turn this setting on to have a button appear. This can link to anywhere, but its reccomended to link to your blog. Turn this off to hide the button. (Your blog title also acts as a link to your blog, therefore this can be an optional addition).', 'trek'),
      'section' => 'homepage_section',
      'settings'=> 'homepage_readmore_toggle'
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
      'default' => '#e4bce4',
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'homepage_readmore_text_hover_color', array(
      'label' => __('Read More Button Text Hover Color', 'Trek'),
      'section' => 'homepage_section',
      'settings' => 'homepage_readmore_text_hover_color'
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

    //blog banner notice
    $wp_customize->add_setting('blog_banner_section');


    $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_banner_section', array(
      'label' => __('Blog Banner Section', 'Trek'),
      'description' => __('Here you can either display your blog name with the background image from your homepage, or choose a post to feature here'),
      'section' => 'blog_section',
      'settings' => 'blog_banner_section'
    )));



    //toggle featured post feature on or off
    $wp_customize->add_setting('toggle_blogbanner_featuredpost', array(
      'default' => 1,
      'transport' => 'refresh',

    ));

    $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_blogbanner_featuredpost', array(
      'label' => __('Enable featured post display', 'Trek'),
      'description' => __('Please see below for instructions to activate', 'Trek'),
      'section' => 'blog_section',
      'settings'=> 'toggle_blogbanner_featuredpost'
    )));

    $wp_customize->add_setting('featuredpost_category', array(

    ));

    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'featuredpost_category', array(
      'section' => 'blog_section',
      'label' => 'Chosen featured category name',
      'description' => 'Please create a new category and assign your chosen post to feature into that category. Then paste the name of this category here. Please only assign one post to this category at a time. ',
      'settings' => 'featuredpost_category',
      'input_attrs' => array(
        'placeholder' => __('Category name'),
      )

    )));



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
    				'description' => esc_html__( 'Choose the layout of your post previews', 'Trek' ),
    				'section' => 'blog_section',
            'settings' => 'post_preview_layout_radio_button',
    				'choices' => array(
    					'widepostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/wholeimagelayout.png',
    						'name' => __( 'Whole Image Layout', 'Trek' )
    					),
    					'gridrightpostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/listoptiontwo.png',
    						'name' => __( 'List Option One', 'Trek' )
    					),
              'gridleftpostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/listoptionone.png',
    						'name' => __( 'List Option Two', 'Trek' )
    					),
              'imagepostlayout' => array(
    						'image' => trailingslashit( get_template_directory_uri() ) . 'img/imageasbackground.png',
    						'name' => __( 'Image as background', 'Trek' )
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
        'description' => __('Does not apply to 4th layout option', 'Trek'),
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

      //no featured image section notice
      $wp_customize->add_setting('blog_no_featured_image_notice');


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'blog_no_featured_image_notice', array(
        'label' => __('No Featured Image Settings', 'Trek'),
        'description' => __('Change the appearance of your posts if they do not have a featured image', 'trek'),
        'section' => 'blog_section',
        'settings' => 'blog_no_featured_image_notice'
      )));



      //creating the control for the background color of the 3rd post display option if there is no featured image
        $wp_customize->add_setting('no_featured_image_color_control', array(
          'default' => get_theme_mod('header_background_color'),
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'no_featured_image_color_control', array(
          'label' => __('Background Color of featured image box', 'Trek'),
          'description' => __('This only applies if the 4th display option is chosen in the blog settings or 3rd display option is chosen in the post settings, and if no featured image is assigned to the post. The default color is your header background color, however you can change this individual setting here without affecting the header.', 'Trek'),
          'section' => 'blog_section',
          'settings' => 'no_featured_image_color_control'
        )));


        // navigation colors
        $wp_customize->add_setting('navigation_color_control');


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'navigation_color_control', array(
          'label' => __('Blog Navigation Colors', 'Trek'),
          'description' => __('Change the appearance of the navigation on your blog page. The defaults of these settings correspond with the heading color settings, however you can change these settings individually here.', 'Trek'),
          'section' => 'blog_section',
          'settings' => 'navigation_color_control'
        )));


        //background-color of navigation
        $wp_customize->add_setting('navigation_background_color', array(
          'default' => get_theme_mod('header_background_color'),
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_background_color', array(
          'label' => __('Background Color of Navigation', 'Trek'),
          'description' => __('This changes the background color of the active page button', 'Trek'),
          'section' => 'blog_section',
          'settings' => 'navigation_background_color'
        )));


        //color of navigation
        $wp_customize->add_setting('navigation_text_color', array(
          'default' => get_theme_mod('header_text_color'),
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_text_color', array(
          'label' => __('Text Color of Navigation', 'Trek'),
          'description' => __('This changes the text color of the active page button', 'Trek'),
          'section' => 'blog_section',
          'settings' => 'navigation_text_color'
        )));





      //single posts section
      //creating the single post settings section
      $wp_customize->add_section('singlepost_section', array(
        'title' => __('Post Settings', 'Trek'),
        'panel' => 'theme_settings',
        'priority' => 22,
      ));

      //single posts notice
      $wp_customize->add_setting('singlespost_title_section');


      $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlespost_title_section', array(
        'label' => __('Single Post Settings', 'Trek'),
        'description' => __('Edit the layout of your posts'),
        'section' => 'singlepost_section',
        'settings' => 'singlespost_title_section'
      )));



      //creating single post layout options
      $wp_customize->add_setting( 'singlepost_layout_radio_button',
          array(
            'default' => 'singlepost_optionone',
            'transport' => 'refresh',
            'sanitize_callback' => 'skyrocket_radio_sanitization'
          )
        );
        $wp_customize->add_control( new Skyrocket_Image_Radio_Button_Custom_Control( $wp_customize, 'singlepost_layout_radio_button',
          array(
            'label' => __( 'Single Post Layout', 'Trek' ),
            'description' => esc_html__( 'Choose the layout of your posts', 'Trek' ),
            'section' => 'singlepost_section',
            'settings' => 'singlepost_layout_radio_button',
            'choices' => array(
              'singlepost_optionone' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'img/singlepostoptionone.png',
                'name' => __( 'Option One', 'Trek' )
              ),
              'singlepost_optiontwo' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'img/singlepostoptiontwo.png',
                'name' => __( 'List Option One', 'Trek' )
              ),
              'singlepost_optionthree' => array(
                'image' => trailingslashit( get_template_directory_uri() ) . 'img/singlepostoptionthree.png',
                'name' => __( 'List Option Two', 'Trek' )
              ),
            )
          )
        ) );



        //single posts display info notice
        $wp_customize->add_setting('singlespost_display_section');


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlespost_display_section', array(
          'label' => __('Single Post Header Display Settings', 'Trek'),
          'description' => __('Choose what information to display on your individual posts header'),
          'section' => 'singlepost_section',
          'settings' => 'singlespost_display_section'
        )));



        //toggle categories on or off
        $wp_customize->add_setting('toggle_singlepost_categories', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_categories', array(
          'label' => __('Display Categories', 'Trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_categories'
        )));

        //toggle date on or off
        $wp_customize->add_setting('toggle_singlepost_date', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_date', array(
          'label' => __('Display Post Date', 'Trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_date'
        )));

        //toggle author on or off
        $wp_customize->add_setting('toggle_singlepost_author', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_author', array(
          'label' => __('Display Post Author', 'Trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_author'
        )));

        //toggle comments on or off
        $wp_customize->add_setting('toggle_singlepost_comments', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_comments', array(
          'label' => __('Display Post Comments Info', 'Trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_comments'
        )));


        $wp_customize->add_setting('singlespost_footerdisplay_section');


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlespost_footerdisplay_section', array(
          'label' => __('Single Post Footer Display Settings', 'Trek'),
          'description' => __('Choose what information to display on your individual posts footer'),
          'section' => 'singlepost_section',
          'settings' => 'singlespost_footerdisplay_section'
        )));



        //toggle tags on or off
        $wp_customize->add_setting('toggle_singlepost_tags', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_tags', array(
          'label' => __('Display Post Tags', 'Trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_tags'
        )));


        //toggle views on or off
        $wp_customize->add_setting('toggle_singlepost_views', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_views', array(
          'label' => __('Display Post View Count', 'Trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_views'
        )));




        //single post navigation color control notice
        $wp_customize->add_setting('singlepost_navigation_notice');


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlepost_navigation_notice', array(
          'label' => __('Single Post Navigation Color Controls', 'Trek'),
          'description' => __('The defaults color settings for your navigation correspond to the colors of your header. However you can change these individually here.', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'singlepost_navigation_notice'
        )));


        //background-color of single navigation
        $wp_customize->add_setting('single_navigation_background_color', array(
          'default' => get_theme_mod('header_background_color'),
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_navigation_background_color', array(
          'label' => __('Background Color of Navigation', 'Trek'),
          'description' => __('This changes the background color of the navigation bar', 'Trek'),
          'section' => 'singlepost_section',
          'settings' => 'single_navigation_background_color'
        )));


        //color of single navigation
        $wp_customize->add_setting('single_navigation_text_color', array(
          'default' => get_theme_mod('header_text_color'),
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_navigation_text_color', array(
          'label' => __('Text Color of Navigation', 'Trek'),
          'description' => __('This changes the text color of the link', 'Trek'),
          'section' => 'singlepost_section',
          'settings' => 'single_navigation_text_color'
        )));


        //color of single navigation
        $wp_customize->add_setting('single_navigation_text_hover_color', array(
          'default' => get_theme_mod('header_text_hover_color'),
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'single_navigation_text_hover_color', array(
          'label' => __('Text Hover Color of Navigation', 'Trek'),
          'description' => __('This changes the text hover color of the link', 'Trek'),
          'section' => 'singlepost_section',
          'settings' => 'single_navigation_text_hover_color'
        )));


        //single post author box notice
        $wp_customize->add_setting('singlepost_authorbox_notice');


        $wp_customize->add_control( new Skyrocket_Simple_Notice_Custom_Control($wp_customize, 'singlepost_authorbox_notice', array(
          'label' => __('Single Post Author Box Controls', 'Trek'),
          'description' => __('An author box lives at the bottom of your posts and tells the reader some information about the author. This information can be edited in the users section in the dashboard.', 'trek'),
          'section' => 'singlepost_section',
          'settings' => 'singlepost_authorbox_notice'
        )));


        //single post author box toggle
        $wp_customize->add_setting('toggle_singlepost_authorbox', array(
          'default' => 1,
          'transport' => 'refresh',

        ));

        $wp_customize->add_control( new Skyrocket_Toggle_Switch_Custom_control( $wp_customize, 'toggle_singlepost_authorbox', array(
          'label' => __('Display Author Box', 'Trek'),
          'description' => __('If your blog has only one user, this might not be necessary.', 'trek'),
          'section' => 'singlepost_section',
          'settings'=> 'toggle_singlepost_authorbox'
        )));


















}

$homepage_background_image = get_theme_mod( 'homepage_background_image' );

add_action('customize_register', 'trek_lucyisobel_custom_settings');


//adding the styles from the customiser for the header in the head of the website
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
