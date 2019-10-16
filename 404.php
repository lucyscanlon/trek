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
                  <?php if(( get_theme_mod('archive_preview_layout_radio_button') ) == 'widepostlayout') { ?>
                    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                      <!--  REQUIRE TEMPLATE FOR WIDE POST LAYOUT  -->
                      <?php require get_template_directory() . '/inc/template-parts/archive/archive-widepostlayout.php'; ?>

                  <!-- LIST AND ALTERNATE POST LAYOUT  -->
                <?php } else if(( get_theme_mod('archive_preview_layout_radio_button') ) == 'gridleftpostlayout') { ?>
                  <div class="gridpostlayout-flex-container">
                    <!-- POST LOOP STARTS HERE -->
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                        <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
                        <?php require get_template_directory() . '/inc/template-parts/archive/archive-gridpostlayout.php'; ?>
                  </div>

                <?php } else if(( get_theme_mod('archive_preview_layout_radio_button') ) == 'gridrightpostlayout') { ?>

                  <div class="gridpostlayout-flex-container">
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                        <!--  REQUIRE TEMPLATE FOR GRID / LIST POST LAYOUT  -->
                        <?php require get_template_directory() . '/inc/template-parts/archive/archive-gridpostlayoutrightaligned.php'; ?>
                  </div>
                <?php } else if(( get_theme_mod('archive_preview_layout_radio_button') ) == 'imagepostlayout') { ?>

                  <div class="imagepostlayout-whole-container">
                        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

                        <!--  REQUIRE TEMPLATE FOR IMAGE POST LAYOUT  -->

                        <?php require get_template_directory() . '/inc/template-parts/archive/archive-imagepostlayout.php'; ?>

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
</div>

<?php get_footer(); ?>
