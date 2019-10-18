
<?php if(( get_theme_mod('homepage_video_toggle', 0 ) ) == 0 ) { ?>
  <?php require get_template_directory() . '/inc/template-parts/homepage/homepage-image.php'; ?>
<?php } else if(( get_theme_mod('homepage_video_toggle', 0 ) ) == 1 ) { ?>
  <?php require get_template_directory() . '/inc/template-parts/homepage/homepage-video.php'; ?>
<?php } ?>
