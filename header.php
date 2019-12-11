<?php
/*
* This is the header for the Trek theme
*
* This template appears on every page of the website and includes all the <head> section.
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Reenie+Beanie&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/978397fef6.js"></script>
  <?php wp_head(); ?>
  <!-- Below is Customiser generated css - this needs to be placed inside the head of the website  -->
  <style>



  /* index */
  .blog-content-top-padding {
    background-color: <?php echo get_theme_mod('blog_page_background_color', '#e2d7e2' ); ?>;
  }

  .blog-content-width-container {
    background-color: <?php echo get_theme_mod('blog_page_background_color', '#e2d7e2' ); ?>;
  }

  .blog-sidebar-width-container {
    background-color: <?php echo get_theme_mod('blog_page_background_color', '#e2d7e2' ); ?>;
  }



  .page-numbers a:hover,
  .page-numbers.current,
  .page-numbers.current:hover {
    color: <?php echo get_theme_mod('navigation_text_color', get_theme_mod('header_text_color', '#FFFFFF') ); ?>;
    background-color: <?php echo get_theme_mod('navigation_background_color', get_theme_mod('header_background_color', '#1D272E') ); ?>;
    text-decoration: none;
  }

  .featuredpost-homepage-title-container h1  {
    text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color', get_theme_mod('homepage_title_shadow_color', '#000000') ); ?> 5px 5px;;
  }

  .featuredpost-homepage-title-container h1  {
    color: <?php echo get_theme_mod('blog_banner_text_color', get_theme_mod('homepage_title_color', '#FFFFFF') ); ?>;
    transition-duration: 1s;
  }

  .featuredpost-homepage-title-container h1:hover {
    color: <?php echo get_theme_mod('blog_banner_text_hover_color', get_theme_mod('homepage_title_link_color', '#E4BCE4') ); ?>;
    transition-duration: 1s;
  }

  /* Moving sidebar to correct location. Or if sidebar turned off centering the posts */


      <?php if(( get_theme_mod('blog_toggle_sidebar', 1 ) ) == 1 ) { ?>
        <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarright') { ?>

         .index .blog-content-whole-container {
          order: 1;
        }

        @media screen and (min-width: 1131px ) {

          .index .blog-column-container {
            float: right;
          }

        }

         .index .blog-sidebar-width-container {
          order: 2;
        }

        @media screen and (min-width: 1131px ) {

          .index .blog-sidebar-container {
            float: left;
          }

        }

        <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarleft') { ?>?>

           .index .blog-content-whole-container {
            order: 2;
          }

          @media screen and (min-width: 1131px ) {
            .index .blog-column-container {
              float: left;
            }

          }

          .index .blog-sidebar-width-container {
            order: 1;
          }

          @media screen and (min-width: 1131px ){
            .index .blog-sidebar-container {
              float: right;
            }
          }

          <?php } ?>
        <?php } else { ?>

            .index .blog-sidebar-width-container {
              display: none;
            }
            .index .blog-content-width-container {
              width: 100%;
            }
            .index .blog-column-container {
              margin: 0px auto;
            }

        <?php  }?>



        .secondary-categories-whole-container {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e'); ?>;
        }

        .secondary-categories-whole-container a {
          color: <?php echo get_theme_mod('header_text_color', '#FFFFFF' ); ?>;
          transition-duration: 0.5s;
        }

        .secondary-categories-whole-container a:hover {
          color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' );?>;
          transition-duration: 0.5s;
        }


        /* index templates link colors  */

        .bloglinkcolor a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
        }

        .bloglinkcolor a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }


        /* white text link hover color class */

        .whitetext-hover-color a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .whitetext-hover-color a {
          color: white;
        }

        /* blog banner - if homepage information is displayed */

        .featuredpost-homepage-title-container a {
          color: <?php echo get_theme_mod('blog_banner_text_color', get_theme_mod('homepage_title_color', '#FFFFFF') ); ?>;
          text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color', get_theme_mod('homepage_title_shadow_color', '#000000') ); ?> 4px 4px;
        }

        .featuredpost-description-container {
          color: <?php echo get_theme_mod('blog_banner_text_color', get_theme_mod('homepage_title_color', '#FFFFFF') ); ?>;
          text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color', get_theme_mod('homepage_title_shadow_color', '#000000') ); ?> 1px 1px;
        }
        /* sidebar settings for single.php */

        <?php if(( get_theme_mod('single_toggle_sidebar', 1 ) ) == 1 ) { ?>
          <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarright') { ?>

          .single .blog-content-whole-container {
            order: 1;
          }
          @media screen and (min-width: 1131px ) {
            .single .blog-column-container {
              float: right;
            }
          }

          .single .blog-sidebar-width-container {
            order: 2;
          }

          @media screen and (min-width: 1131px ) {
            .single .blog-sidebar-container {
              float: left;
            }
          }

          <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarleft') { ?>?>

            .single .blog-content-whole-container {
              order: 2;
            }

            @media screen and (min-width: 1131px ) {
              .single .blog-column-container {
                float: left;
              }
            }

            .single .blog-sidebar-width-container {
              order: 1;
            }

            @media screen and (min-width: 1131px ) {
              .single .blog-sidebar-container {
                float: right;
              }
            }

          <?php } ?>
        <?php } else { ?>

              .single .blog-sidebar-width-container {
                display: none;
              }
              .single .blog-content-width-container {
                width: 100%;
              }
              .single .blog-column-container {
                margin: 0px auto;
              }
        <?php  }?>

        .wp-block-tag-cloud a {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;

        }


        /* single post navigation colors */

        .singlepost-navigation-colors {
          color: <?php echo get_theme_mod('single_navigation_text_color', get_theme_mod('header_text_color', '#FFFFFF' ) ); ?>;
          background-color: <?php echo get_theme_mod('single_navigation_background_color', get_theme_mod('header_background_color', '#1d272e') ); ?>;
        }

        .singlepost-navigation-colors a {
          color: <?php echo get_theme_mod('single_navigation_text_color', get_theme_mod('header_text_color', '#FFFFFF' ) ); ?>;
        }

        .singlepost-navigation-colors a:hover {
          color: <?php echo get_theme_mod('single_navigation_text_hover_color', get_theme_mod('header_text_hover_color', '#e4bce4' ) ); ?>;
        }

        /* single post author box */

        .singlepost-author-website-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        /* comments */

        .logged-in-as a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
        }

        .logged-in-as a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .comments .reply {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;
        }

        .comments .reply a {
          color: <?php echo get_theme_mod('header_text_color', '#FFFFFF' ); ?>;
          transition-duration: 1s;

        }

        .comments .reply a:hover {
          color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' );?>;
          transition-duration: 1s;
        }

        .comment-reply-title a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
        }

        .comment-reply-title a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .comment-author a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>;

        }

        .comment-author a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .nav-right-container a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
        }

        .nav-right-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .nav-left-container a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
        }

        .nav-left-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .comment-form #comment:focus {
          outline: none !important;
          box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
        }

        .author-group input:focus {
          outline: none !important;
          border:1px solid red;
          box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
        }

        .form-group input:focus {
          outline: none !important;
          border:1px solid red;
          box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
        }

        .form-submit input {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;
          color: <?php echo get_theme_mod('header_text_color', '#FFFFFF' ); ?>;

        }

        .form-submit input:hover {
          color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' );?>;
          transition-duration: 1s;
        }

        .singlepost-content-container a {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }


        /* page default - with sidebar */

        /*  Putting sidebar on the right side  */
        <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarright') { ?>

          .page-sidebar .blog-content-whole-container {
            order: 1;
          }

          @media screen and (min-width: 1131px ) {
            .page-sidebar .blog-column-container {
              float: right;
            }
          }

          .page-sidebar .blog-sidebar-width-container {
            order: 2;
            padding-bottom: 45px;
          }

          @media screen and (min-width: 1131px ) {
            .page-sidebar .blog-sidebar-container {
              float: left;
            }
          }

        <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarleft') { ?>?>

            .page-sidebar .blog-content-whole-container {
              order: 2;
            }

            @media screen and (min-width: 1131px ) {
              .page-sidebar .blog-column-container {
                float: left;
              }
            }

            .page-sidebar .blog-sidebar-width-container {
              order: 1;
              padding-bottom: 45px;
            }

            @media screen and (min-width: 1131px ) {
              .page-sidebar .blog-sidebar-container {
                float: right;
              }
            }

        <?php } ?>


        /* page - no sidebar */

        .blog-content-whole-container-nosidebar {
          background-color: <?php echo get_theme_mod('blog_page_background_color', '#e2d7e2' ); ?>;
        }
        .page-top-padding {
          background-color: <?php echo get_theme_mod('blog_page_background_color', '#e2d7e2' ); ?>;
        }
        .page-background-color-container {
          background-color: <?php echo get_theme_mod('blog_page_background_color', '#e2d7e2' ); ?>;
        }

        .page-split-tags-container {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;
        }

        .page-split-comment-container a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
        }

        .page-split-comment-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .page-split-comment-container .reply {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;
        }

        .page-split-comment-container .reply  a {
          color: white
        }

        .page-split-comment-container .reply  a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }


        /* archive   */

        <?php if(( get_theme_mod('archive_toggle_sidebar', 1 ) ) == 1 ) { ?>
          <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarright') { ?>

            .archive .blog-content-whole-container {
              order: 1;
            }

            @media screen and (min-width: 1131px ) {
              .archive .blog-column-container {
                float: right;
              }
            }

            .archive .blog-sidebar-width-container {
              order: 2;
            }

            @media screen and (min-width: 1131px ) {
              .archive .blog-sidebar-container {
                float: left;
              }
            }

          <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarleft') { ?>?>

            .archive .blog-content-whole-container {
              order: 2;
            }

            @media screen and (min-width: 1131px ) {
              .archive .blog-column-container {
                float: left;
              }
            }

            .archive .blog-sidebar-width-container {
              order: 1;
            }

            @media screen and (min-width: 1131px ) {
              .archive .blog-sidebar-container {
                float: right;
              }
            }

          <?php } ?>
        <?php } else { ?>

              .archive .blog-sidebar-width-container {
                display: none;
              }
              .archive .blog-content-width-container {
                width: 100%;
              }
              .archive .blog-column-container {
                margin: 0px auto;
              }

          <?php  }?>

          .blog-archive-results {
            background-color: <?php echo get_theme_mod('archive_navbar_backgroundcolor', get_theme_mod('header_background_color', '#1D272E') ); ?>;
            color: <?php echo get_theme_mod('archive_navbar_textcolor', get_theme_mod('header_text_color', '#FFFFFF') ); ?>;
          }

          /*  footer  */

          .footer-text-container {
            color: <?php echo get_theme_mod('header_text_color', '#FFFFFF' ); ?>;
          }

          .footer-text-container a {
            color: <?php echo get_theme_mod('header_text_color', '#FFFFFF' ); ?>;
          }

          .footer-text-container a:hover {
            color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
            transition-duration: 0.5s;
          }

          /*  search overlay  */

          #closesearch a {
            color: black;
          }

          #closesearch a:hover {
            color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
          }


          .header-overlay-title-container {
            text-shadow:  <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?> 2px 2px!important;
          }

          /* homepage */

          .homepage-readmore-button-container a {
            color: <?php echo get_theme_mod('homepage_readmore_text_color', '#FFFFFF' ); ?>;
          }

          .homepage-readmore-button-container a:hover {
            color: <?php echo get_theme_mod('homepage_readmore_text_hover_color', '#e4bce4' ); ?>;
          }
          .homepage-readmore-button-container p {
            background-color: <?php echo get_theme_mod('homepage_readmore_color', '#1d272e' ); ?>;
          }

          .homepage-title-container h1:hover {
            color: <?php echo get_theme_mod('homepage_title_link_color', '#e4bce4' ); ?>;
            transition-duration: 1s;
          }

          .homepage-title-container h1 {
            color: <?php echo get_theme_mod('homepage_title_color', '#FFFFFF' ); ?>;
            transition-duration: 1s;
          }

          .page-numbers a:hover,
          .page-numbers.current,
          .page-numbers.current:hover {
            color: <?php echo get_theme_mod('navigation_text_color', get_theme_mod('header_text_color', '#FFFFFF') ); ?>;
            background-color: <?php echo get_theme_mod('navigation_background_color', get_theme_mod('header_background_color', '#1D272E') ); ?>;
            text-decoration: none;
          }

          /* sidebar */

          .trek-widget-width-container a {
            color: <?php echo get_theme_mod('blog_page_link_color', '#000000' ); ?>
          }

          .trek-widget-width-container a:hover {
            color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
          }

          .trek-widget .tagcloud a {
            background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>
          }

          .trek-widget .tagcloud a {
            color: <?php echo get_theme_mod('header_text_color', '#FFFFFF' ); ?>
          }

          .trek-widget .tagcloud a:hover  {
            color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>
          }


          .blog-search-results {
            background-color: <?php echo get_theme_mod('archive_navbar_backgroundcolor', get_theme_mod('header_background_color', '#1D272E') ); ?>;
            color: <?php echo get_theme_mod('archive_navbar_textcolor', get_theme_mod('header_text_color', '#FFFFFF') ); ?>;
          }


          /* small screen css  */

          .smallscreenmenu {
            background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;

          }

          .smallscreenmenu a {
            color: <?php echo get_theme_mod('header_text_color', '#ffffff' ); ?>;
          }

          .smallscreenmenu a:hover {
            color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
          }

          .smallmenuclose:hover {
            cursor: pointer;
            color: <?php echo get_theme_mod('header_text_hover_color', '#e4bce4' ); ?>;
          }


          @media screen and ( max-width: 500px ) {


            .featuredpost-title-container h1  {
              text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color', get_theme_mod('homepage_title_shadow_color', '#000000') ); ?> 3.5px 3.5px;;
            }


            .featuredpost-container-padding {
              padding-top: 40px;
              padding-bottom: 40px;
            }

            .homepage-title-container h1 {
              text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color', '#000000' ); ?> 3.5px 3.5px;

            }



          }


          /* contact form */

          .singlepost-content-container input:focus {
            outline: none !important;
            box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          }

          .singlepost-content-container textarea:focus {
            outline: none !important;
            box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          }

          .page input:focus {
            outline: none !important;
            box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          }

          .page textarea:focus {
            outline: none !important;
            box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          }

          .trek-widget-width-container input:focus {
            outline: none !important;
            box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          }

          .trek-widget-width-container textarea:focus {
            outline: none !important;
            box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          }



          /* fonts */

        


  </style>
</head>
<body id="whole-body" class="bodynormal">
  <header>
    <!-- This menu is displayed on iPads and mobile menus and hidden on larger screens  -->
    <div class="smallscreenmenuoverflow">
      <div class="smallscreenmenu Montserrat headerTextColor" id="smallmenu">
        <div class="smallmenutitle">
          <p><?php echo __('menu', 'trek'); ?><i class="fas fa-times" id="crossclosebutton"></i></p>
        </div>
        <!-- Displays main menu as well as secondary menu in one  -->
        <div class="smallmenuprimary">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
          ));
          ?>
          <?php wp_nav_menu( array(
            'theme_location' => 'secondary',
            'container' => false,
          )); ?>
        </div>
      </div>
    </div>
    <div class="header-whole-container headerbackgroundcolor headerTextColor">
      <div class="smallscreenheader">
        <div class="smallscreen-burger-icon">
          <li><i class="fa fa-bars" aria-hidden="true" id="SmallScreenMenuOpen"></i></li>
        </div>
        <div class="smallscreen-socialmedia-search">
          <ul class="headerTextColor">
            <?php if (( get_theme_mod('toggle_switch_twitter', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('twitter_link')?>" target="blank"><i class="fab fa-twitter"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_facebook', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('facebook_link')?>" target="blank"><i class="fab fa-facebook"></i></a></li>
              <?php } ?>
              <?php if (( get_theme_mod('toggle_switch_instagram', 1 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('instagram_link')?>" target="blank"><i class="fab fa-instagram"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_pinterest', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('pinterest_link')?>" target="blank"><i class="fab fa-pinterest"></i></a></li>
              <?php } ?>
              <?php if (( get_theme_mod('toggle_switch_googleplus', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('googleplus_link')?>" target="blank"><i class="fab fa-google-plus"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_youtube', 1 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('youtube_link')?>" target="blank"><i class="fab fa-youtube"></i></a></li>
              <?php } ?>
              <?php if (( get_theme_mod('toggle_switch_linkedin', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('linkedin_link')?>" target="blank"><i class="fab fa-linkedin"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_snapchat', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('snapchat_link')?>" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_goodreads', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('goodreads_link')?>" target="blank"><i class="fab fa-goodreads"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_shop', 1 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('shop_link')?>" target="blank"><i class="fas fa-shopping-cart"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_email', 1 ) ) == 1){ ?>
                <li><a href="mailto:<?php echo get_theme_mod('email_link')?>" target="blank"><i class="far fa-envelope-open"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_vimeo', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('vimeo_link')?>" target="blank"><i class="fab fa-vimeo-v"></i></a></li>
              <?php  } ?>
              <?php if (( get_theme_mod('toggle_switch_tumblr', 0 ) ) == 1){ ?>
                <li><a href="<?php echo get_theme_mod('tumblr_link')?>" target="blank"><i class="fab fa-tumblr"></i></a></li>
              <?php  } ?>
                <li><i class="fas fa-search" id="searchbutton" style="cursor: pointer;"></i></li>
              </ul>
            </div>
          </div>
      <!-- Gets the header template for first option (customiser option) only displays on larger screens -->
          <?php if(( get_theme_mod('header_layout_radio_button', 'menuleft' ) ) == 'menucenter') { ?>
              <?php require get_template_directory() . '/inc/template-parts/header/header-one.php'; ?>
            <?php } else if (( get_theme_mod('header_layout_radio_button', 'menuleft') ) == 'menuright') { ?>
              <?php require get_template_directory() . '/inc/template-parts/header/header-two.php'; ?>
            <?php  } else if (( get_theme_mod('header_layout_radio_button', 'menuleft') ) == 'menuleft') { ?>
              <?php require get_template_directory() . '/inc/template-parts/header/header-three.php'; ?>
            <?php  }?>
    </div>
  </header>
