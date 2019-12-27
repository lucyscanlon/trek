<?php
/*
* The default template for displaying all pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<?php get_header(); ?>
  <section class="featured-post-container">
    <!--  Fetches template for blog banner  -->
    <?php require get_template_directory() . '/inc/template-parts/index/blogbanner.php'; ?>
  </section>
  <div class="secondary-categories-whole-container Montserrat">
    <!--  Checks whether to display secondary menu (customiser option)   -->
    <?php if (( get_theme_mod('secondary_menu_display', 1 )  ) == 1) { ?>
      <?php wp_nav_menu( array(
        'theme_location' => 'secondary',
        'container' => false,
      )); ?>
    <?php } ?>
  </div>
  <div class="page-sidebar">
    <div class="blog-content-top-padding">
    </div>
    <div class="blog-content-whole-container">
      <div class="blog-content-width-container">
        <div class="blog-column-container">
          <!--  Loop starts here   -->
          <?php if( have_posts() ):
              while( have_posts() ): the_post(); ?>
              <!--  This function increases page views each time the page is loaded   -->
              <?php trek_save_post_views( get_the_ID() ); ?>
              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

              <!-- Full Image template   -->
              <?php if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage' ) ) == 'singlefullimage') { ?>
                <?php require get_template_directory() . '/inc/template-parts/page/page-fullimage.php'; ?>

              <!-- Banner Image template   -->
              <?php } else if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage' ) ) == 'singlebannerimage') {?>
                <?php require get_template_directory() . '/inc/template-parts/page/page-bannerimage.php'; ?>

              <!-- Text Over Image template   -->
              <?php } else if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage' ) ) == 'singletextoverimage') { ?>
                <?php require get_template_directory() . '/inc/template-parts/page/page-textoverimage.php'; ?>

              <?php } ?>

            <!--  Loop ends here  -->
            <?php  endwhile; ?>
          <?php endif; ?>
          <!--  Gets comment template if comments are open  -->
          <?php if ( comments_open() ):
            comments_template();
          endif; ?>
        </div>
      </div>
  <!--  Gets Sidebar  -->
  <div class="blog-sidebar-width-container">
    <div class="blog-sidebar-container">
      <?php get_sidebar(); ?>
    </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>
