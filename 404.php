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
                <?php esc_html_e("Nothing could be found at this location! Try searching for something in the search box below. Or scroll down for some popular posts. ", 'trek')?>
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
      // <!--  This query finds the posts with the most views  -->
       if( $posts_query->have_posts() ) : ?>
          <?php while( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
            <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
             <!--  Collects the correct template to display the content (customiser option) This follows the layout of the archive settings  -->

                  <!-- Full Image template  -->
                  <?php if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-fullimage') { ?>
                      <?php require get_template_directory() . '/inc/template-parts/archive/archive-fullimage.php'; ?>

                  <!-- List Style template  -->
                  <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststyle') { ?>
                    <div class="gridpostlayout-flex-container">
                      <?php require get_template_directory() . '/inc/template-parts/archive/archive-liststyle.php'; ?>
                    </div>

                  <!-- List Style Reversed template  -->
                  <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-liststylereversed') { ?>
                    <div class="gridpostlayout-flex-container">
                      <?php require get_template_directory() . '/inc/template-parts/archive/archive-liststylereversed.php'; ?>
                    </div>

                  <!-- Text Over Image template  -->
                  <?php } else if(( get_theme_mod('archive_preview_layout_radio_button', 'archive-liststyle' ) ) == 'archive-textoverimage') { ?>
                    <div class="imagepostlayout-whole-container">
                      <?php require get_template_directory() . '/inc/template-parts/archive/archive-textoverimage.php'; ?>
                    </div>
                  <?php } ?>
          <?php endwhile; ?>
        <?php endif; ?>
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
