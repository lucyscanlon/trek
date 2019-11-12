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
<div class="archive">
  <div class="blog-content-top-padding">
  </div>
  <div class="blog-content-whole-container">
    <div class="blog-content-width-container">
      <div class="blog-column-container">
        <div class="blog-search-results Montserrat">
          <div class="blog-search-text">
            <!--  Creating the search results    -->
            <p>
              <?php printf( esc_html__('Showing search results for: %s', 'trek' ), get_search_query() ); ?>
            </p>
          </div>
        </div>
        <!--  Loop starts here   -->
        <?php if( have_posts() ) {
          while( have_posts() ): the_post(); ?>
          <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

            <!-- Full Image template   -->
            <?php if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-fullimage') { ?>
              <?php require get_template_directory() . '/inc/template-parts/archive/archive-fullimage.php'; ?>


            <!-- List Style template   -->
            <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststyle') { ?>
              <div class="gridpostlayout-flex-container">
                <?php require get_template_directory() . '/inc/template-parts/archive/archive-liststyle.php'; ?>
              </div>

              <!-- List Style Reversed template   -->
            <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststylereversed') { ?>
              <div class="gridpostlayout-flex-container">
                <?php require get_template_directory() . '/inc/template-parts/archive/archive-liststylereversed.php'; ?>
              </div>

              <!-- Text Over Image template   -->
            <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-textoverimage') { ?>
              <div class="imagepostlayout-whole-container">
                <?php require get_template_directory() . '/inc/template-parts/archive/archive-textoverimage.php'; ?>
              </div>
            <?php } ?>

          <!--  Loop ends here  -->
          <?php  endwhile;
        } else {
          //<!--  Gets template if there is no content  -->
          require get_template_directory() . '/inc/template-parts/index/index-nocontent.php';
        } ?>
      <div class="pagination-whole-container Montserrat">
        <!--  Gets blog pagination  -->
        <?php wpex_pagination(); ?>
      </div>
    </div>
  </div>
  <!--  Gets sidebar -->
  <div class="blog-sidebar-width-container">
    <div class="blog-sidebar-container">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
</div>
<?php get_footer(); ?>
