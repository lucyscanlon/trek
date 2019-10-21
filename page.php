<?php get_header(); ?>
<section class="featured-post-container">
  <?php require get_template_directory() . '/inc/template-parts/index/blogbanner.php'; ?>
</section>
<div class="secondary-categories-whole-container Montserrat">
  <?php wp_nav_menu( array(
    'theme_location' => 'secondary',
    'container' => false,
  )); ?>
</div>
<div class="page-sidebar">
<div class="blog-content-top-padding">

</div>
<div class="blog-content-whole-container">
  <div class="blog-content-width-container">
    <div class="blog-column-container">

      <?php if( have_posts() ):
        while( have_posts() ): the_post(); ?>
         <?php trek_save_post_views( get_the_ID() ); ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

        <?php if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage' ) ) == 'singlefullimage') { ?>

          <!--  REQUIRE TEMPLATE FOR SINGLE POST LAYOUT OPTION ONE  -->
          <?php require get_template_directory() . '/inc/template-parts/page/page-fullimage.php'; ?>

        <?php } else if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage' ) ) == 'singlebannerimage') {?>

          <!--  REQUIRE TEMPLATE FOR SINGLE POST LAYOUT OPTION TWO  -->
          <?php require get_template_directory() . '/inc/template-parts/page/page-bannerimage.php'; ?>

        <?php } else if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage' ) ) == 'singletextoverimage') { ?>

          <!--  REQUIRE TEMPLATE FOR SINGLE POST LAYOUT OPTION THREE  -->
          <?php require get_template_directory() . '/inc/template-parts/page/page-textoverimage.php'; ?>

        <?php } ?>
      <?php  endwhile; ?>
    <?php endif; ?>

    <?php if ( comments_open() ):
        comments_template();
      endif; ?>

    </div>

  </div>



  <!--  SIDEBAR  -->
  <div class="blog-sidebar-width-container">
    <div class="blog-sidebar-container">
      <?php get_sidebar(); ?>
    </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
