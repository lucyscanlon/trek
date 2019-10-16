<?php get_header(); ?>
<?php $homepage_background_video = wp_get_attachment_url( get_theme_mod( 'video_upload' )); ?>
<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

  <div class="homepage-video-whole-container">
    <iframe class="vid" width="100%" height="100%" src="<?php echo get_theme_mod('video_background_link'); ?>?autoplay=1&mute=1&loop=1&playlist=<?php echo get_theme_mod('video_playlist_link'); ?>&background=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <div class="homepage-video-zindex-container">
    <div class="homepage-content-container" style="padding-top: <?php echo get_theme_mod('homepage_title_height'); ?>vh;">
      <?php if (( get_theme_mod('homepage_logo_toggle') ) == 1) { ?>
        <div class="homepage-logo-container">
          <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><img src="<?php echo $image[0]; ?>"></a>
        </div>
      <?php } ?>
      <?php if (( get_theme_mod('homepage_title_toggle') ) == 1) { ?>
        <div class="homepage-title-container ReenieBeanie" style="color: <?php echo get_theme_mod('homepage_title_color'); ?>; text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color' ); ?> 6px 6px;">
          <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><h1><?php print get_bloginfo('name'); ?></h1></a>
        </div>
      <?php } ?>
      <?php if (( get_theme_mod('toggle_switch_description') ) == 1) { ?>
        <div class="homepage-description-container Montserrat" style="color: <?php echo get_theme_mod('homepage_description_color'); ?>; text-shadow: <?php echo get_theme_mod('homepage_description_shadow_color'); ?> 1px 1px;">
          <p><?php echo get_bloginfo('description');?></p>
        </div>
      <?php } ?>
      <?php if(( get_theme_mod('homepage_readmore_toggle') ) == 1 ) { ?>
        <div class="homepage-readmore-button-container Montserrat" style="background-color: <?php echo get_theme_mod('homepage_readmore_color'); ?>; color: <?php echo get_theme_mod('homepage_readmore_text_color'); ?>;">
          <div class="homepage-readmore-button">
            <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><p><?php echo get_theme_mod('homepage_readmore_text'); ?></p></a>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  <div class="homepage-video-footer">
    <?php get_footer(); ?>
  </div>
