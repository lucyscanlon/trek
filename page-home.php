<?php get_header(); ?>
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





  </style>
</head>
<?php $homepage_background_image = get_theme_mod( 'homepage_background_image' ); ?>
<section class="homepage-whole-body-container" style="background: url('<?php echo $homepage_background_image; ?>');
background-position: center center;
background-size: cover; ">

  <div class="homepage-title-container ReenieBeanie" style="padding-top: <?php echo get_theme_mod('homepage_title_height'); ?>vh; color: <?php echo get_theme_mod('homepage_title_color'); ?>; text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color' ); ?> 6px 6px;">
    <h1><?php print get_bloginfo('name'); ?></h1>
  </div>
  <?php if (( get_theme_mod('toggle_switch_description') ) == 1) { ?>
  <div class="homepage-description-container Montserrat" style="color: <?php echo get_theme_mod('homepage_description_color'); ?>; text-shadow: <?php echo get_theme_mod('homepage_description_shadow_color'); ?> 1px 1px;">
    <p><?php echo get_bloginfo('description');?></p>
  </div>
<?php } ?>
<div class="homepage-readmore-button-container Montserrat" style="background-color: <?php echo get_theme_mod('homepage_readmore_color'); ?>; color: <?php echo get_theme_mod('homepage_readmore_text_color'); ?>;">
  <div class="homepage-readmore-button">
    <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><p><?php echo get_theme_mod('homepage_readmore_text'); ?></p></a>
  </div>
</div>
</section>

<?php get_footer(); ?>
