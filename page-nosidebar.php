<?php
/*
Template Name: No Sidebar

*/
?>
<?php get_header(); ?>
<section class="featured-post-container">
  <?php require get_template_directory() . '/inc/template-parts/index/blogbanner.php'; ?>
</section>
<div class="secondary-categories-whole-container Montserrat">
  <?php if (( get_theme_mod('secondary_menu_display', 1 )  ) == 1) { ?>
  <?php wp_nav_menu( array(
    'theme_location' => 'secondary',
    'container' => false,
  )); ?>
<?php } ?>
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

        <?php if(( get_theme_mod('singlepost_layout_radio_button', 'singlefullimage') ) == 'singlefullimage') { ?>

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
