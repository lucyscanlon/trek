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
  <div class="single">
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
          <?php if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage') ) == 'singlefullimage') { ?>
            <?php require get_template_directory() . '/inc/template-parts/single-post/single-fullimage.php'; ?>

          <!-- Banner Image template   -->
          <?php } else if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage') ) == 'singlebannerimage') {?>
            <?php require get_template_directory() . '/inc/template-parts/single-post/single-bannerimage.php'; ?>

          <!-- Text Over Image template   -->
          <?php } else if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage') ) == 'singletextoverimage') { ?>
            <?php require get_template_directory() . '/inc/template-parts/single-post/single-textoverimage.php'; ?>
          <?php } ?>

          <!--  Loop ends here  -->
        <?php  endwhile; ?>
      <?php endif; ?>

      <!--  Gets template for single post navigation - located in theme-support.php  -->
      <?php echo trek_post_navigation() ?>
      <!--  Gets whether to display author box and gets the template for it  -->
      <?php if(( get_theme_mod('toggle_singlepost_authorbox', 1 ) ) == 1 ) { ?>
        <?php require get_template_directory() . '/inc/template-parts/single-post/authorbox.php'; ?>
      <?php }  ?>
      <!--  Gets comment template if comments are open  -->
      <?php if ( comments_open() ):
              comments_template();
      endif; ?>
    </div>
  </div>
  <!--  Gets sidebar   -->
  <div class="blog-sidebar-width-container">
    <div class="blog-sidebar-container">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
