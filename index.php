<?php get_header(); ?>
<?php // adding the color styles for links on the blog page ?>
<head>
  <style>

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

  <?php if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarright') { ?>

    .blog-content-whole-container {
      order: 1;
    }

    .blog-column-container {
      float: right;
    }

    .blog-sidebar-width-container {
      order: 2;
    }

    .blog-sidebar-container {
      float: left;
    }



    <?php } else if(( get_theme_mod('sidebar_layout_radio_button') ) == 'sidebarleft') { ?>?>

      .blog-content-whole-container {
        order: 2;
      }

      .blog-column-container {
        float: left;
      }

      .blog-sidebar-width-container {
        order: 1;
      }

      .blog-sidebar-container {
        float: right;
      }




      <?php } ?>

      .blog-content-top-padding {
        background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
      }

      .blog-content-width-container {
        background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
      }

      .blog-sidebar-width-container {
        background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
      }





  </style>
</head>
<section class="featured-post-container">

</section>
<div class="secondary-categories-whole-container Montserrat">
  <?php wp_nav_menu( array(
    'theme_location' => 'secondary',
    'container' => false,
  )); ?>
</div>


<!-- BLOG POST PREVIEWS-->

<div class="blog-content-top-padding">

</div>
<div class="blog-content-whole-container">
  <div class="blog-content-width-container">
    <div class="blog-column-container">


      <!-- WIDE POST LAYOUT  -->
      <?php if(( get_theme_mod('post_preview_layout_radio_button') ) == 'widepostlayout') { ?>
        <!-- POST LOOP STARTS HERE -->
        <?php if( have_posts() ):

        while( have_posts() ): the_post(); ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

          <!--  REQUIRE TEMPLATE FOR WIDE POST LAYOUT  -->
          <?php require get_template_directory() . '/inc/template-parts/index/widepostlayout.php'; ?>

        <!--  POST LOOP ENDS HERE  -->
        <?php  endwhile;
        endif; ?>




      <!-- LIST AND ALTERNATE POST LAYOUT  -->
    <?php } else if(( get_theme_mod('post_preview_layout_radio_button') ) == 'gridleftpostlayout') { ?>
      <div class="gridpostlayout-flex-container">
        <!-- POST LOOP STARTS HERE -->

          <?php if( have_posts() ):

            while( have_posts() ): the_post(); ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
            <?php require get_template_directory() . '/inc/template-parts/index/gridpostlayout.php'; ?>

            <!--  POST LOOP ENDS HERE  -->
          <?php  endwhile;
        endif; ?>
      </div>


    <?php } else if(( get_theme_mod('post_preview_layout_radio_button') ) == 'gridrightpostlayout') { ?>

      <div class="gridpostlayout-flex-container">
        <!-- POST LOOP STARTS HERE -->

          <?php if( have_posts() ):

            while( have_posts() ): the_post(); ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
            <?php require get_template_directory() . '/inc/template-parts/index/gridpostlayoutrightaligned.php'; ?>

            <!--  POST LOOP ENDS HERE  -->
          <?php  endwhile;
        endif; ?>
      </div>

    <?php } else if(( get_theme_mod('post_preview_layout_radio_button') ) == 'imagepostlayout') { ?>

      <div class="imagepostlayout-whole-container">
        <!-- POST LOOP STARTS HERE -->

          <?php if( have_posts() ):

            while( have_posts() ): the_post(); ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!--  REQUIRE TEMPLATE FOR IMAGE POST LAYOUT  -->

            <?php require get_template_directory() . '/inc/template-parts/index/imagepostlayout.php'; ?>

            <!--  POST LOOP ENDS HERE  -->
          <?php  endwhile;
        endif; ?>
      </div>

    <?php } ?>

    </div>
  </div>



  <!--  SIDEBAR  -->
  <div class="blog-sidebar-width-container">
    <div class="blog-sidebar-container">

    </div>

  </div>
</div>

<?php get_footer(); ?>
