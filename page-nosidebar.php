<?php
/*
Template Name: No Sidebar

*/
?>
<?php get_header(); ?>
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
    padding-bottom: 45px;
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
      padding-bottom: 45px;

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

    .blog-content-whole-container-nosidebar {
      background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
    }



    .singlepostnav-right-container {
      color: <?php echo get_theme_mod('single_navigation_text_color'); ?>;
      background-color: <?php echo get_theme_mod('single_navigation_background_color'); ?>;
    }

    .singlepostnav-left-container  {
      color: <?php echo get_theme_mod('single_navigation_text_color'); ?>;
      background-color: <?php echo get_theme_mod('single_navigation_background_color'); ?>;
    }

    .singlepostnav-right-container a {
      color: <?php echo get_theme_mod('single_navigation_text_color'); ?>;
    }

    .singlepostnav-left-container a {
      color: <?php echo get_theme_mod('single_navigation_text_color'); ?>;
    }

    .singlepostnav-right-container a:hover {
      color: <?php echo get_theme_mod('single_navigation_text_hover_color'); ?>;
    }

    .singlepostnav-left-container a:hover {
      color: <?php echo get_theme_mod('single_navigation_text_hover_color'); ?>;
    }

    .singlepost3-whole-container a {
      color: <?php echo get_theme_mod('header_text_hover_color');?>;
    }

    .singlepost2-whole-container a {
      color: <?php echo get_theme_mod('header_text_hover_color');?>;
    }

    .singlepost1-whole-container a {
      color: <?php echo get_theme_mod('header_text_hover_color');?>;
    }

    .wp-block-tag-cloud a {
      background-color: <?php echo get_theme_mod('header_background_color'); ?>;

    }

    .singlepost-author-title-container a {
      color: <?php echo get_theme_mod('blog_page_link_color'); ?>
    }

    .singlepost-author-title-container a:hover {
      color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
    }

    .singlepost-author-website-container a:hover {
      color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>

    }

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

</style>
<section class="featured-post-container">
  <?php require get_template_directory() . '/inc/template-parts/index/blogbanner.php'; ?>
</section>
<div class="secondary-categories-whole-container Montserrat">
  <?php wp_nav_menu( array(
    'theme_location' => 'secondary',
    'container' => false,
  )); ?>
</div>
<div class="blog-content-top-padding">

</div>
<div class="blog-content-whole-container-nosidebar">
  <div class="blog-content-width-container-nosidebar">
    <div class="blog-column-container-nosidebar">

      <?php if( have_posts() ):
        while( have_posts() ): the_post(); ?>
         <?php trek_save_post_views( get_the_ID() ); ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

        <?php if(( get_theme_mod('singlepost_layout_radio_button') ) == 'singlepost_optionone') { ?>

          <!--  REQUIRE TEMPLATE FOR SINGLE POST LAYOUT OPTION ONE  -->
          <?php require get_template_directory() . '/inc/template-parts/page/page-largeimage.php'; ?>

        <?php } else if(( get_theme_mod('singlepost_layout_radio_button') ) == 'singlepost_optiontwo') {?>

          <!--  REQUIRE TEMPLATE FOR SINGLE POST LAYOUT OPTION TWO  -->
          <?php require get_template_directory() . '/inc/template-parts/page/page-bannerimage.php'; ?>

        <?php } else if(( get_theme_mod('singlepost_layout_radio_button') ) == 'singlepost_optionthree') { ?>

          <!--  REQUIRE TEMPLATE FOR SINGLE POST LAYOUT OPTION THREE  -->
          <?php require get_template_directory() . '/inc/template-parts/page/page-imageasbackground.php'; ?>

        <?php } ?>
      <?php  endwhile; ?>
    <?php endif; ?>

    <div class="page-nosidebar-comments">

    <?php if ( comments_open() ):
        comments_template();
      endif; ?>

    </div>

    </div>

  </div>
</div>
</div>

<?php get_footer(); ?>
