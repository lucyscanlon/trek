<?php
/*
* The template for displaying the front page
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<!-- Checks if a video of image is used for the background of the Front Page (customiser option)  -->
<?php if(( get_theme_mod('homepage_video_toggle', 0 ) ) == 0 ) { ?>
  <!-- Requires correct template  -->
  <?php require get_template_directory() . '/inc/template-parts/frontpage/frontpage-image.php'; ?>
<?php } else if(( get_theme_mod('homepage_video_toggle', 0 ) ) == 1 ) { ?>
  <?php //require get_template_directory() . '/inc/mobile-detect/mobile_detect.php'; ?>
  <?php $detect = new Mobile_Detect; ?>
  <?php
    if ( $detect->isMobile() ) {
      require get_template_directory() . '/inc/template-parts/frontpage/frontpage-image.php';
    } elseif ( $detect->isTablet() ) {
      require get_template_directory() . '/inc/template-parts/frontpage/frontpage-image.php';
    } else {
      require get_template_directory() . '/inc/template-parts/frontpage/frontpage-video.php';
    } ?>

<?php } ?>
