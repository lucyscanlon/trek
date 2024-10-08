<?php
/*
* The template for displaying the Front Page if background is an image (chosen in the customiser)
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<?php get_header(); ?>
<?php $homepage_background_video = wp_get_attachment_url( get_theme_mod( 'video_upload' )); ?>
<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

   <!--  Sets video as front page background (customiser option)  -->
  <div class="homepage-video-whole-container">
   <iframe class="vid" width="100%" height="100%" src="<?php echo get_theme_mod('video_background_link'); ?>?autoplay=1&playsinline=1&mute=1&loop=1&playlist=<?php echo get_theme_mod('video_playlist_link'); ?>&background=1" frameborder="0" allow="accelerometer; autoplay; muted; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="homepage-video-zindex-container">
    <div class="homepage-content-container" style="padding-top: <?php echo get_theme_mod('homepage_title_height', 32 ); ?>vh;">
      <!--  Checks whether to post the site logo (customiser option) -->
      <?php if (( get_theme_mod('homepage_logo_toggle', 0 ) ) == 1) { ?>
        <div class="homepage-logo-container">
          <!--  Displays logo as a link to blog page  -->
          <a href="<?php echo get_theme_mod('homepage_blog_link', get_permalink( get_option('page_for_posts' ) )); ?> "><img src="<?php echo $image[0]; ?>"></a>
        </div>
      <?php } ?>
      <!--  Checks whether to display the site title (customiser option)  -->
      <?php if (( get_theme_mod('homepage_title_toggle', 1 ) ) == 1) { ?>
        <div class="homepage-title-container ReenieBeanie" style="color: <?php echo get_theme_mod('homepage_title_color', '#FFFFFF' ); ?>; text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color', '#000000' ); ?> 5px 5px;">
          <!--  Displays site title as a link to the blog page  -->
          <a href="<?php echo get_theme_mod('homepage_blog_link', get_permalink( get_option('page_for_posts' ) )); ?> "><h1><?php print get_bloginfo('name'); ?></h1></a>
        </div>
      <?php } ?>
      <!--  Checks whether to display the site description (customiser option)  -->
      <?php if (( get_theme_mod('toggle_switch_description', 1 ) ) == 1) { ?>
        <div class="homepage-description-container Montserrat" style="color: <?php echo get_theme_mod('homepage_description_color', '#FFFFFF' ); ?>; text-shadow: <?php echo get_theme_mod('homepage_description_shadow_color', '#000000' ); ?> 1px 1px;">
          <p><?php echo get_bloginfo('description');?></p>
        </div>
      <?php } ?>
      <!--  Checks whether to display the read more button (customiser option)  -->
      <?php if(( get_theme_mod('homepage_readmore_toggle', 0 ) ) == 1 ) { ?>
        <div class="homepage-readmore-button-container Montserrat" style="background-color: <?php echo get_theme_mod('homepage_readmore_color', '#1d272e' ); ?>; color: <?php echo get_theme_mod('homepage_readmore_text_color', '#FFFFFF' ); ?>;">
          <div class="homepage-readmore-button">
            <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><p><?php echo get_theme_mod('homepage_readmore_text', 'Read More' ); ?></p></a>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="homepage-video-footer">
    <?php get_footer(); ?>
  </div>
