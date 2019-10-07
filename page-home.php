
<head>
  <style>

  .homepage-readmore-button-container a {
    color: <?php echo get_theme_mod('homepage_readmore_text_color'); ?>;
    transition-duration: 0.5s;

  }

  .homepage-readmore-button-container a:hover {
    color: <?php echo get_theme_mod('homepage_readmore_text_hover_color'); ?>;
    transition-duration: 0.5s;
  }

  .homepage-title-container a h1:hover {
    color: <?php echo get_theme_mod('homepage_title_link_color'); ?>;
    transition-duration: 1s;
  }

  <?php if(( get_theme_mod('homepage_title_letterspacing_toggle') ) == 1 ) { ?>
  .homepage-title-container a h1:hover {
    letter-spacing: 6px;
  }
  <?php } ?>

  .homepage-title-container a h1 {
    color: <?php echo get_theme_mod('homepage_title_color'); ?>;
    text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color' ); ?> 6px 6px;
    transition-duration: 1s;
  }







  </style>
</head>
<?php if(( get_theme_mod('homepage_video_toggle') ) == 0 ) { ?>
  <?php require get_template_directory() . '/inc/template-parts/homepage/homepage-image.php'; ?>
<?php } else if(( get_theme_mod('homepage_video_toggle') ) == 1 ) { ?>
  <?php require get_template_directory() . '/inc/template-parts/homepage/homepage-video.php'; ?>
<?php } ?>
