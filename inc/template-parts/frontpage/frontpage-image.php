<?php get_header(); ?>

<?php $homepage_background_image = get_theme_mod( 'homepage_background_image', get_template_directory_uri().'/img/girlsinfrontofmountain.jpg' ); ?>
<?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
   $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

  <section class="homepage-whole-body-container" style="background: url('<?php echo $homepage_background_image; ?>');
    background-position: center center;
    background-size: cover; ">
    <div class="homepage-content-container" style="padding-top: <?php echo get_theme_mod('homepage_title_height', 32 ); ?>vh;">
      <?php if (( get_theme_mod('homepage_logo_toggle', 0 ) ) == 1) { ?>
        <div class="homepage-logo-container">
          <a href="<?php echo get_theme_mod('homepage_blog_link', get_permalink( get_option('page_for_posts' ) ) ); ?> "><img src="<?php echo $image[0]; ?>"></a>
        </div>
      <?php } ?>
      <?php if (( get_theme_mod('homepage_title_toggle', 1 ) ) == 1) { ?>
        <div class="homepage-title-container ReenieBeanie" style="color: <?php echo get_theme_mod('homepage_title_color', '#FFFFFF' ); ?>; text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color', '#000000' ); ?> 5px 5px;">
          <a href="<?php echo get_theme_mod('homepage_blog_link', get_permalink( get_option('page_for_posts' ) ) ); ?> "><h1><?php print get_bloginfo('name'); ?></h1></a>
        </div>
      <?php } ?>
      <?php if (( get_theme_mod('toggle_switch_description', 1 ) ) == 1) { ?>
        <div class="homepage-description-container Montserrat" style="color: <?php echo get_theme_mod('homepage_description_color', '#ffffff' ); ?>; text-shadow: <?php echo get_theme_mod('homepage_description_shadow_color', '#000000'); ?> 1px 1px;">
          <p><?php echo get_bloginfo('description');?></p>
        </div>
      <?php } ?>
      <?php if(( get_theme_mod('homepage_readmore_toggle', 0 ) ) == 1 ) { ?>
        <div class="homepage-readmore-button-container Montserrat" style="background-color: <?php echo get_theme_mod('homepage_readmore_color', '#1d272e' ); ?>; color: <?php echo get_theme_mod('homepage_readmore_text_color', '#FFFFFF' ); ?>;">
          <div class="homepage-readmore-button">
            <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><p><?php echo get_theme_mod('homepage_readmore_text', 'Read More'); ?></p></a>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>
<?php get_footer(); ?>
