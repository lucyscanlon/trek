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
<div class="archive">
<div class="blog-content-top-padding">
</div>
<div class="blog-content-whole-container">
  <div class="blog-content-width-container">
    <div class="blog-column-container">


      <div class="blog-archive-results Montserrat">
        <div class="blog-archive-text">
          <p>
            <?php printf('Showing results for the ', 'trek'); the_archive_title(); ?>
          </p>
        </div>
      </div>

      <?php if( have_posts() ) {

      while( have_posts() ): the_post(); ?>


      <!-- WIDE POST LAYOUT  -->
      <?php if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-fullimage') { ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

          <!--  REQUIRE TEMPLATE FOR WIDE POST LAYOUT  -->
          <?php require get_template_directory() . '/inc/template-parts/archive/archive-fullimage.php'; ?>




      <!-- LIST AND ALTERNATE POST LAYOUT  -->
    <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststyle') { ?>
      <div class="gridpostlayout-flex-container">
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
            <?php require get_template_directory() . '/inc/template-parts/archive/archive-liststyle.php'; ?>
      </div>


    <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststylereversed') { ?>

      <div class="gridpostlayout-flex-container">
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
            <?php require get_template_directory() . '/inc/template-parts/archive/archive-liststylereversed.php'; ?>
      </div>

    <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-textoverimage') { ?>

      <div class="imagepostlayout-whole-container">
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!--  REQUIRE TEMPLATE FOR IMAGE POST LAYOUT  -->

            <?php require get_template_directory() . '/inc/template-parts/archive/archive-textoverimage.php'; ?>


      </div>

    <?php } ?>

      <!--  POST LOOP ENDS HERE  -->
    <?php  endwhile;
  } else {
    require get_template_directory() . '/inc/template-parts/index/index-nocontent.php';
  } ?>


    <div class="pagination-whole-container Montserrat">
      <?php wpex_pagination(); ?>
    </div>

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
