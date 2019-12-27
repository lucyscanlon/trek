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
  <?php require get_template_directory() . '/inc/template-parts/frontpage/frontpage-video.php'; ?>
<?php } ?>
