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
          <div class="blog-archive-results Montserrat">
            <div class="blog-archive-text">
              <p>
                <?php printf('Showing results for the ', 'trek'); the_archive_title(); ?>
              </p>
            </div>
          </div>
          <?php if( have_posts() ) {
            while( have_posts() ): the_post(); ?>
              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
                <!--  Collects the correct template to display the content (customiser option) This follows the layout of the archive settings but uses the index template  -->

                <!-- Full Image template  -->
                <?php if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-fullimage') { ?>
                  <?php require get_template_directory() . '/inc/template-parts/index/fullimage.php'; ?>

                <!-- List Style template  -->
                <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststyle') { ?>
                  <div class="gridpostlayout-flex-container">
                    <?php require get_template_directory() . '/inc/template-parts/index/liststyle.php'; ?>
                  </div>

                <!-- List Style Reversed template  -->
                <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststylereversed') { ?>
                  <div class="gridpostlayout-flex-container">
                    <?php require get_template_directory() . '/inc/template-parts/index/liststylereversed.php'; ?>
                  </div>

                <!-- Text Over Image template  -->
                <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-textoverimage') { ?>
                  <div class="imagepostlayout-whole-container">
                    <?php require get_template_directory() . '/inc/template-parts/index/textoverimage.php'; ?>
                  </div>
                <?php } ?>

                <!-- Ends customiser if else statement   -->
                <?php  endwhile;
                  } else {
                    // <!-- No content Template   -->
                    require get_template_directory() . '/inc/template-parts/index/index-nocontent.php';
                  } ?>
            <!-- Template for blog navigation   -->
            <div class="pagination-whole-container Montserrat">
              <?php wpex_pagination(); ?>
            </div>
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
