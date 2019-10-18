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
    color: <?php echo get_theme_mod('navigation_text_color', '#ffffff' ); ?>;
    background-color: <?php echo get_theme_mod('navigation_background_color', '#1d272e' ); ?>;
    text-decoration: none;
  }

  /* Moving sidebar to correct location. Or if sidebar turned off centering the posts */
      <?php if(( get_theme_mod('blog_toggle_sidebar', 1 ) ) == 1 ) { ?>
        <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarright') { ?>

         .index .blog-content-whole-container {
          order: 1;
        }
         .index .blog-column-container {
          float: right;
        }
         .index .blog-sidebar-width-container {
          order: 2;
        }
        .index .blog-sidebar-container {
          float: left;
        }
        <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarleft') { ?>?>

           .index .blog-content-whole-container {
            order: 2;
          }
          .index .blog-column-container {
            float: left;
          }
          .index .blog-sidebar-width-container {
            order: 1;
          }
          .index .blog-sidebar-container {
            float: right;
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
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
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
          color: <?php echo get_theme_mod('blog_banner_text_color', '#ffffff' ); ?>;
          text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color', '#000000' ); ?> 4px 4px;
        }

        .featuredpost-description-container {
          color: <?php echo get_theme_mod('blog_banner_text_color', '#FFFFFF'); ?>;
          text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color', '#000000' ); ?> 1px 1px;
        }
        /* sidebar settings for single.php */

        <?php if(( get_theme_mod('single_toggle_sidebar', 1 ) ) == 1 ) { ?>
          <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarright') { ?>

          .single .blog-content-whole-container {
            order: 1;
          }
          .single .blog-column-container {
            float: right;
          }
          .single .blog-sidebar-width-container {
            order: 2;
          }
          .single .blog-sidebar-container {
            float: left;
          }
          <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarleft') { ?>?>

            .single .blog-content-whole-container {
              order: 2;
            }
            .single .blog-column-container {
              float: left;
            }
            .single .blog-sidebar-width-container {
              order: 1;
            }
            .single .blog-sidebar-container {
              float: right;
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
          color: <?php echo get_theme_mod('single_navigation_text_color', '#FFFFFF'); ?>;
          background-color: <?php echo get_theme_mod('single_navigation_background_color', '#1d272e' ); ?>;
        }

        .singlepost-navigation-colors a {
          color: <?php echo get_theme_mod('single_navigation_text_color', '#FFFFFF'); ?>;
        }

        .singlepost-navigation-colors a:hover {
          color: <?php echo get_theme_mod('single_navigation_text_hover_color', '#e4bce4' ); ?>;
        }

        /* single post author box */

        .singlepost-author-website-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        /* comments */

        .logged-in-as a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
        }

        .logged-in-as a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .comments .reply {
          background-color: <?php echo get_theme_mod('header_background_color', '#1d272e' ); ?>;
        }

        .comments .reply a {
          color: white;
          transition-duration: 1s;

        }

        .comments .reply a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>;
          transition-duration: 1s;
        }

        .comment-reply-title a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
        }

        .comment-reply-title a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .comment-author a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
        }

        .comment-author a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .nav-right-container a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
        }

        .nav-right-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .nav-left-container a {
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
        }

        .nav-left-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color', '#e4bce4' ); ?>
        }

        .comment-form #comment:focus {
          outline: none !important;
          border:1px solid red;
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


        /* page default - with sidebar */

        /*  Putting sidebar on the right side  */
        <?php if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarright') { ?>

          .page-sidebar .blog-content-whole-container {
            order: 1;
          }
          .page-sidebar .blog-column-container {
            float: right;
          }
          .page-sidebar .blog-sidebar-width-container {
            order: 2;
            padding-bottom: 45px;
          }
          .page-sidebar .blog-sidebar-container {
            float: left;
          }
        <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright') ) == 'sidebarleft') { ?>?>

            .page-sidebar .blog-content-whole-container {
              order: 2;
            }
            .page-sidebar .blog-column-container {
              float: left;
            }
            .page-sidebar .blog-sidebar-width-container {
              order: 1;
              padding-bottom: 45px;
            }
            .page-sidebar .blog-sidebar-container {
              float: right;
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
          color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
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
            .archive .blog-column-container {
              float: right;
            }
            .archive .blog-sidebar-width-container {
              order: 2;
            }
            .archive .blog-sidebar-container {
              float: left;
            }

          <?php } else if(( get_theme_mod('sidebar_layout_radio_button', 'sidebarright' ) ) == 'sidebarleft') { ?>?>

            .archive .blog-content-whole-container {
              order: 2;
            }
            .archive .blog-column-container {
              float: left;
            }
            .archive .blog-sidebar-width-container {
              order: 1;
            }
            .archive .blog-sidebar-container {
              float: right;
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
            background-color: <?php echo get_theme_mod('archive_navbar_backgroundcolor', '#1d272e' ); ?>;
            color: <?php echo get_theme_mod('archive_navbar_textcolor', '#FFFFFF' ); ?>;
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
          .homepage-readmore-button-container {
            background-color: <?php echo get_theme_mod('homepage_readmore_color', '#1d272e' ); ?>;
          }

          .page-numbers a:hover,
          .page-numbers.current,
          .page-numbers.current:hover {
            color: <?php echo get_theme_mod('navigation_text_color', '#FFFFFF'); ?>;
            background-color: <?php echo get_theme_mod('navigation_background_color', '#1d272e' ); ?>;
            text-decoration: none;
          }

          /* sidebar */

          .trek-widget-width-container a {
            color: <?php echo get_theme_mod('blog_page_link_color', '#1d272e' ); ?>
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
            background-color: <?php echo get_theme_mod('archive_navbar_backgroundcolor', '#1d272e' ); ?>;
            color: <?php echo get_theme_mod('archive_navbar_textcolor', '#FFFFFF' ); ?>;
          }











  </style>
</head>
<body>
  <header>
    <div class="header-whole-container headerbackgroundcolor">
      <!-- get the header template for first option-->
      <?php if(( get_theme_mod('header_layout_radio_button', 'menucenter' ) ) == 'menucenter') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-one.php'; ?>

            <?php } else if (( get_theme_mod('header_layout_radio_button', 'menucenter') ) == 'menuright') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-two.php'; ?>

            <?php  } else if (( get_theme_mod('header_layout_radio_button', 'menucenter') ) == 'menuleft') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-three.php'; ?>

            <?php  }?>
    </div>
  </header>
