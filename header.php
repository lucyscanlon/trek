<?php
/*
* This is the header for the Trek theme
*
* This template appears on every page of the website and includes all the <head> section.
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Reenie+Beanie&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500i,700,700i&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/978397fef6.js"></script>

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header-whole-container headerbackgroundcolor">
      <!-- get the header template for first option-->
      <?php if(( get_theme_mod('header_layout_radio_button') ) == 'menucenter') { ?>
        <div class="menucenter-socialmedia-container">
          <ul class="headerTextColor">
            <?php if (( get_theme_mod('toggle_switch_twitter') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('twitter_link')?>" target="blank"><i class="fab fa-twitter"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_facebook') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('facebook_link')?>" target="blank"><i class="fab fa-facebook"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_instagram') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('instagram_link')?>" target="blank"><i class="fab fa-instagram"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_pinterest') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('pinterest_link')?>" target="blank"><i class="fab fa-pinterest"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_googleplus') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('googleplus_link')?>" target="blank"><i class="fab fa-google-plus"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_youtube') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('youtube_link')?>" target="blank"><i class="fab fa-youtube"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_linkedin') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('linkedin_link')?>" target="blank"><i class="fab fa-linkedin"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_snapchat') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('snapchat_link')?>" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_goodreads') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('goodreads_link')?>" target="blank"><i class="fab fa-goodreads"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_shop') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('shop_link')?>" target="blank"><i class="fas fa-shopping-cart"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_email') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('email_link')?>" target="blank"><i class="far fa-envelope-open"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_vimeo') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('vimeo_link')?>" target="blank"><i class="fab fa-vimeo-v"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_tumblr') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('tumblr_link')?>" target="blank"><i class="fab fa-tumblr"></i></a></li>

                <?php
              } ?>

          </ul>
        </div>
        <div class="menucenter-menu-container Montserrat headerTextColor">
          <?php

          wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
          ));


          ?>
        </div>
        <div class="menucenter-search-container Montserrat headerTextColor">
          <i class="fas fa-search"></i>
        </div>


        <!-- get the header template for second option -->
      <?php } else if (( get_theme_mod('header_layout_radio_button') ) == 'menuright') { ?>
        <div class="menuright-socialmedia-search-container">
          <ul class="headerTextColor">
            <?php if (( get_theme_mod('toggle_switch_twitter') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('twitter_link')?>" target="blank"><i class="fab fa-twitter"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_facebook') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('facebook_link')?>" target="blank"><i class="fab fa-facebook"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_instagram') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('instagram_link')?>" target="blank"><i class="fab fa-instagram"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_pinterest') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('pinterest_link')?>" target="blank"><i class="fab fa-pinterest"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_googleplus') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('googleplus_link')?>" target="blank"><i class="fab fa-google-plus"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_youtube') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('youtube_link')?>" target="blank"><i class="fab fa-youtube"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_linkedin') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('linkedin_link')?>" target="blank"><i class="fab fa-linkedin"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_snapchat') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('snapchat_link')?>" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_goodreads') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('goodreads_link')?>" target="blank"><i class="fab fa-goodreads"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_shop') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('shop_link')?>" target="blank"><i class="fas fa-shopping-cart"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_email') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('email_link')?>" target="blank"><i class="far fa-envelope-open"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_vimeo') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('vimeo_link')?>" target="blank"><i class="fab fa-vimeo-v"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_tumblr') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('tumblr_link')?>" target="blank"><i class="fab fa-tumblr"></i></a></li>

                <?php
              } ?>

          </ul>
        </div>
        <div class="menuright-menu-container Montserrat headerTextColor">
          <?php

          wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
          ));


          ?>
        </div>
      <?php  } else if (( get_theme_mod('header_layout_radio_button') ) == 'menuleft') { ?>
        <div class="menuleft-menu-container Montserrat headerTextColor">

          <?php

          wp_nav_menu( array(
            'theme_location' => 'primary',
            'container' => false,
          ));


          ?>



        </div>
        <div class="menuleft-socialmedia-container headerTextColor">
          <ul class="headerTextColor">
            <?php if (( get_theme_mod('toggle_switch_twitter') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('twitter_link')?>" target="blank"><i class="fab fa-twitter"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_facebook') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('facebook_link')?>" target="blank"><i class="fab fa-facebook"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_instagram') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('instagram_link')?>" target="blank"><i class="fab fa-instagram"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_pinterest') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('pinterest_link')?>" target="blank"><i class="fab fa-pinterest"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_googleplus') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('googleplus_link')?>" target="blank"><i class="fab fa-google-plus"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_youtube') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('youtube_link')?>" target="blank"><i class="fab fa-youtube"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_linkedin') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('linkedin_link')?>" target="blank"><i class="fab fa-linkedin"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_snapchat') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('snapchat_link')?>" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_goodreads') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('goodreads_link')?>" target="blank"><i class="fab fa-goodreads"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_shop') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('shop_link')?>" target="blank"><i class="fas fa-shopping-cart"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_email') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('email_link')?>" target="blank"><i class="far fa-envelope-open"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_vimeo') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('vimeo_link')?>" target="blank"><i class="fab fa-vimeo-v"></i></a></li>

                <?php
              } ?>
            <?php if (( get_theme_mod('toggle_switch_tumblr') ) == 1){
                ?><li><a href="<?php echo get_theme_mod('tumblr_link')?>" target="blank"><i class="fab fa-tumblr"></i></a></li>

                <?php
              } ?>

          </ul>
        </div>
    <?php  }?>
    </div>
  </header>
