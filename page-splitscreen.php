<?php
/*
Template Name: Split Screen

*/
?>
<?php get_header(); ?>
<?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<style>
.secondary-categories-whole-container {
  background-color: <?php echo get_theme_mod('header_background_color'); ?>;
}

.secondary-categories-whole-container a {
  color: <?php echo get_theme_mod('header_text_color'); ?>;
  transition-duration: 0.5s;
}

.secondary-categories-whole-container a:hover {
  color: <?php echo get_theme_mod('header_text_hover_color');?>;
  transition-duration: 0.5s;
}

.page-top-padding {
  background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
}

.page-background-color-container {
  background-color: <?php echo get_theme_mod('blog_page_background_color'); ?>;
}

.page-split-tags-container {
  background-color: <?php echo get_theme_mod('header_background_color'); ?>;
  color: <?php echo get_theme_mod('header_text_color'); ?>; ?>;
}

.page-split-comment-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.page-split-comment-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.page-split-comment-container .reply {
  background-color: <?php echo get_theme_mod('header_background_color'); ?>;
}

.page-split-comment-container .reply  a {
  color: white
}

.page-split-comment-container .reply  a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}



</style>

<?php
  while ( have_posts() ) :
    the_post(); ?>
      <section class="featured-post-container">
          <?php require get_template_directory() . '/inc/template-parts/index/blogbanner.php'; ?>
      </section>
      <div class="secondary-categories-whole-container Montserrat">
        <?php wp_nav_menu( array(
          'theme_location' => 'secondary',
          'container' => false,
        )); ?>
      </div>
      <div class="page-background-color-container">
        <div class="page-split-width-container">
          <div class="page-fullwidth-whole-container">
            <div class="page-fullwidth-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">

            </div>
            <div class="page-fullwidth-content-container">
              <div class="page-split-title-container ReenieBeanie">
                <h1><?php the_title(); ?></h1>
              </div>
              <div class="page-split-meta-container Montserrat">
                <p><?php the_time('jS F Y')?> By <?php the_author(); ?></p>
              </div>
              <div class="page-split-content-container Montserrat">
                <div class="page">
                  <?php echo the_content();  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    <?php if ( comments_open() ) : ?>
      <div class="page-split-tags-container">
      </div>
      <div class="page-top-padding">
      </div>
      <div class="page-background-color-container">

        <div class="page-split-comment-container">
        <?php comments_template(); ?>
      </div>


      </div>

      <?php endif;

    endwhile; // End of the loop. ?>


<?php get_footer(); ?>
