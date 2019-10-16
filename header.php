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
    background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
  }

  .blog-content-width-container {
    background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
  }

  .blog-sidebar-width-container {
    background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
  }



  .page-numbers a:hover,
  .page-numbers.current,
  .page-numbers.current:hover {
    color: <?php echo get_theme_mod('navigation_text_color'); ?>;
    background-color: <?php echo get_theme_mod('navigation_background_color'); ?>;
    text-decoration: none;
  }

  /* Moving sidebar to correct location. Or if sidebar turned off centering the posts */
      <?php if(( get_theme_mod('blog_toggle_sidebar') ) == 1 ) { ?>
        <?php if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarright') { ?>

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
        <?php } else if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarleft') { ?>?>

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
          background-color: <?php echo get_theme_mod('header_background_color'); ?>;
        }

        .secondary-categories-whole-container a {
          color: <?php echo get_theme_mod('header_text_color'); ?>;
          transition-duration: 0.5s;
        }

        .secondary-categories-whole-container a:hover {
          color: <?php echo get_theme_mod('header_text_hover_color');?>;
          transition-duration: 0.5s;
        }


        /* index templates link colors  */

        .bloglinkcolor a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .bloglinkcolor a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }


        /* white text link hover color class */

        .whitetext-hover-color a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .whitetext-hover-color a {
          color: white;
        }

        /* blog banner - if homepage information is displayed */

        .featuredpost-homepage-title-container a {
          color: <?php echo get_theme_mod('blog_banner_text_color'); ?>;
          text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color' ); ?> 4px 4px;
        }

        .featuredpost-description-container {
          color: <?php echo get_theme_mod('blog_banner_text_color'); ?>;
          text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color' ); ?> 1px 1px;
        }

        /* sidebar settings for single.php */

        <?php if(( get_theme_mod('single_toggle_sidebar') ) == 1 ) { ?>
          <?php if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarright') { ?>

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
          <?php } else if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarleft') { ?>?>

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
          background-color: <?php echo get_theme_mod('header_background_color'); ?>;

        }


        /* single post navigation colors */

        .singlepost-navigation-colors {
          color: <?php echo get_theme_mod('single_navigation_text_color'); ?>;
          background-color: <?php echo get_theme_mod('single_navigation_background_color'); ?>;
        }

        .singlepost-navigation-colors a {
          color: <?php echo get_theme_mod('single_navigation_text_color'); ?>;
        }

        .singlepost-navigation-colors a:hover {
          color: <?php echo get_theme_mod('single_navigation_text_hover_color'); ?>;
        }

        /* single post author box */

        .singlepost-author-website-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        /* comments */

        .logged-in-as a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .logged-in-as a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .comments .reply {
          background-color: <?php echo get_theme_mod('header_background_color'); ?>;
        }

        .comments .reply a {
          color: white;
          transition-duration: 1s;

        }

        .comments .reply a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>;
          transition-duration: 1s;
        }

        .comment-reply-title a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .comment-reply-title a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .comment-author a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .comment-author a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .nav-right-container a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .nav-right-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .nav-left-container a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .nav-left-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .comment-form #comment:focus {
          outline: none !important;
          border:1px solid red;
          box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color'); ?>;
        }

        .author-group input:focus {
          outline: none !important;
          border:1px solid red;
          box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color'); ?>;
        }

        .form-group input:focus {
          outline: none !important;
          border:1px solid red;
          box-shadow: 0 0 10px <?php echo get_theme_mod('blog_page_link_hover_color'); ?>;
        }

        .form-submit input {
          background-color: <?php echo get_theme_mod('header_background_color'); ?>;
          color: <?php echo get_theme_mod('header_text_color'); ?>;

        }

        .form-submit input:hover {
          color: <?php echo get_theme_mod('header_text_hover_color');?>;
          transition-duration: 1s;
        }


        /* page default - with sidebar */

        /*  Putting sidebar on the right side  */
        <?php if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarright') { ?>

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
        <?php } else if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarleft') { ?>?>

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
          background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
        }
        .page-top-padding {
          background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
        }
        .page-background-color-container {
          background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
        }

        .page-split-tags-container {
          background-color: <?php echo get_theme_mod('header_background_color'); ?>;
        }

        .page-split-comment-container a {
          color: <?php echo get_theme_mod('blog_page_link_color'); ?>
        }

        .page-split-comment-container a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }

        .page-split-comment-container .reply {
          background-color: <?php echo get_theme_mod('header_background_color'); ?>;
        }

        .page-split-comment-container .reply  a {
          color: white
        }

        .page-split-comment-container .reply  a:hover {
          color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
        }


        /* archive   */

        <?php if(( get_theme_mod('archive_toggle_sidebar') ) == 1 ) { ?>
          <?php if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarright') { ?>

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

          <?php } else if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarleft') { ?>?>

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
            background-color: <?php echo get_theme_mod('archive_navbar_backgroundcolor'); ?>;
            color: <?php echo get_theme_mod('archive_navbar_textcolor'); ?>;
          }

          /*  footer  */

          .footer-text-container {
            color: <?php echo get_theme_mod('header_text_color'); ?>;
          }

          .footer-text-container a {
            color: <?php echo get_theme_mod('header_text_color'); ?>;
          }

          .footer-text-container a:hover {
            color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
            transition-duration: 0.5s;
          }

          /*  search overlay  */

          #closesearch a {
            color: black;
          }

          #closesearch a:hover {
            color: <?php echo get_theme_mod('header_text_hover_color'); ?>;
          }


          .header-overlay-title-container {
            text-shadow:  <?php echo get_theme_mod('header_text_hover_color'); ?> 2px 2px!important;
          }

          /* homepage */

          .homepage-readmore-button-container a {
            color: <?php echo get_theme_mod('homepage_readmore_text_color'); ?>;
          }

          .homepage-readmore-button-container a:hover {
            color: <?php echo get_theme_mod('homepage_readmore_text_hover_color'); ?>;
          }
          .homepage-readmore-button-container {
            background-color: <?php echo get_theme_mod('homepage_readmore_color'); ?>;
          }

          .page-numbers a:hover,
          .page-numbers.current,
          .page-numbers.current:hover {
            color: <?php echo get_theme_mod('navigation_text_color'); ?>;
            background-color: <?php echo get_theme_mod('navigation_background_color'); ?>;
            text-decoration: none;
          }

          .blog-search-results {
            background-color: <?php echo get_theme_mod('archive_navbar_backgroundcolor'); ?>;
            color: <?php echo get_theme_mod('archive_navbar_textcolor'); ?>;
          }









  </style>
</head>
<body>
  <header>
    <div class="header-whole-container headerbackgroundcolor">
      <!-- get the header template for first option-->
      <?php if(( get_theme_mod('header_layout_radio_button') ) == 'menucenter') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-one.php'; ?>

            <?php } else if (( get_theme_mod('header_layout_radio_button') ) == 'menuright') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-two.php'; ?>

            <?php  } else if (( get_theme_mod('header_layout_radio_button') ) == 'menuleft') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-three.php'; ?>

            <?php  }?>
    </div>
  </header>
