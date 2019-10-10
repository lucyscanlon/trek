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
<div class="blog-content-whole-container">
  <div class="blog-content-width-container">
    <div class="blog-column-container">

      <div class="oops-whole-container">
        <div class="oops-title-container ReenieBeanie">
          <h2><?php esc_html_e('404', 'trek'); ?></h2>
        </div>
        <div class="oops-text-container ReenieBeanie">
          <h3>
            <?php esc_html_e("Oops! Theres nothing here", "trek"); ?>
          </h3>
        </div>
        <div class="oops-paragraph-container Montserrat">
          <p>
            <?php esc_html_e("Nothing could be found at this location! Try searching for something in the search box below. Or scroll down for some popular posts. ")?>
          </p>
        </div>

          <div class="oops-search-container">
            <form role="search" method="get"
              action="<?php echo esc_url( home_url( '/' ) ); ?>">
              <input type="search" autofocus class="search-field Montserrat" placeholder="<?php echo esc_attr_x( 'Search here...', 'placeholder', 'trek' ); ?>" value="<?php echo get_search_query(); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'trek' );?>"/>
                <input type="hidden" name="post_type" value="search" />
              </form>
          </div>

      </div>

      <?php

      $posts_args = array(
        'post_type' => 'post',
        'posts_per_page' => '',
        'meta_key' => 'trek_post_views',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
      );

      $posts_query = new WP_Query( $posts_args );

       if( $posts_query->have_posts() ) : ?>
          <?php while( $posts_query->have_posts() ) : $posts_query->the_post(); ?>


                  <!-- WIDE POST LAYOUT  -->
                  <?php if(( get_theme_mod('post_preview_layout_radio_button') ) == 'widepostlayout') { ?>
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                      <!--  REQUIRE TEMPLATE FOR WIDE POST LAYOUT  -->
                      <?php require get_template_directory() . '/inc/template-parts/index/widepostlayout.php'; ?>

                  <!-- LIST AND ALTERNATE POST LAYOUT  -->
                <?php } else if(( get_theme_mod('post_preview_layout_radio_button') ) == 'gridleftpostlayout') { ?>
                  <div class="gridpostlayout-flex-container">
                    <!-- POST LOOP STARTS HERE -->
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                        <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
                        <?php require get_template_directory() . '/inc/template-parts/index/gridpostlayout.php'; ?>
                  </div>

                <?php } else if(( get_theme_mod('post_preview_layout_radio_button') ) == 'gridrightpostlayout') { ?>

                  <div class="gridpostlayout-flex-container">
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                        <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
                        <?php require get_template_directory() . '/inc/template-parts/index/gridpostlayoutrightaligned.php'; ?>
                  </div>
                <?php } else if(( get_theme_mod('post_preview_layout_radio_button') ) == 'imagepostlayout') { ?>

                  <div class="imagepostlayout-whole-container">
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                        <!--  REQUIRE TEMPLATE FOR IMAGE POST LAYOUT  -->

                        <?php require get_template_directory() . '/inc/template-parts/index/imagepostlayout.php'; ?>

                  </div>

                <?php } ?>

          <?php endwhile; ?>

        <?php endif; ?>



    </div>

  </div>



  <!--  SIDEBAR  -->
  <div class="blog-sidebar-width-container">
    <div class="blog-sidebar-container">
      <?php get_sidebar(); ?>
    </div>
    </div>
  </div>

<?php get_footer(); ?>
