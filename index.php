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
<!-- Index Page Post Previews -->
<div class="index">
  <div class="blog-content-top-padding">
  </div>
<div class="blog-content-whole-container">
  <div class="blog-content-width-container">
    <div class="blog-column-container">
      <!--  Post loop starts here   -->
      <?php if( have_posts() ) {
        while( have_posts() ): the_post(); ?>
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <!-- Collects the template for the index page (customiser option)   -->

          <!-- Full Image template   -->
          <?php if(( get_theme_mod('post_preview_layout_radio_button', 'fullimage' ) ) == 'fullimage') { ?>
              <?php require get_template_directory() . '/inc/template-parts/index/fullimage.php'; ?>

          <!-- List style template   -->
          <?php } else if(( get_theme_mod('post_preview_layout_radio_button', 'fullimage' ) ) == 'liststyle') { ?>
            <div class="gridpostlayout-flex-container">
              <?php require get_template_directory() . '/inc/template-parts/index/liststyle.php'; ?>
            </div>

          <!-- List style Reversed template   -->
          <?php } else if(( get_theme_mod('post_preview_layout_radio_button', 'fullimage' ) ) == 'liststylereversed') { ?>
            <div class="gridpostlayout-flex-container">
              <?php require get_template_directory() . '/inc/template-parts/index/liststylereversed.php'; ?>
            </div>

          <!-- Text Over Image template   -->
          <?php } else if(( get_theme_mod('post_preview_layout_radio_button', 'fullimage' ) ) == 'textoverimage') { ?>
            <div class="imagepostlayout-whole-container">
              <?php require get_template_directory() . '/inc/template-parts/index/textoverimage.php'; ?>
            </div>
          <?php } ?>

          <!--  Post Loop ends here  -->
          <?php  endwhile;
            } else {
              require get_template_directory() . '/inc/template-parts/index/index-nocontent.php';
            } ?>

    <!--  Blog Pagination  -->
    <div class="pagination-whole-container Montserrat">
      <?php wpex_pagination(); ?>
    </div>
  </div>
</div>
  <!--  Gets sidebar  -->
    <div class="blog-sidebar-width-container">
      <div class="blog-sidebar-container">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
