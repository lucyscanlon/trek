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
  <script src="https://kit.fontawesome.com/978397fef6.js"></script>

  <!-- adding the styles for the custom options on customizer -->
  <style>
    .header-whole-container {
      background-color: <?php echo get_theme_mod('header_background_color'); ?>;
    }

    .headerTextColor {
      color: <?php echo get_theme_mod('header_text_color'); ?>;
    }

    .headerTextColor a {
      color: <?php echo get_theme_mod('header_text_color'); ?>;
    }

    .headerTextColor i {
      color: <?php echo get_theme_mod('header_text_color'); ?>;
    }

  </style>

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="header-whole-container">
      <!-- get the header template for first option-->
      <?php if(( get_theme_mod('header_layout_radio_button') ) == 'menucenter') { ?>
        <div class="menucenter-socialmedia-container">
          <ul class="headerTextColor">
            <li><i class="fab fa-twitter"></i></li>
            <li>
              <i class="fab fa-instagram"></i>
            </li>

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

            <li><i class="fab fa-twitter"></i></li>
            <li>
              <i class="fab fa-instagram"></i>
            </li>
            <li>
              <i class="fas fa-search"></i>
            </li>


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
          <ul>
            <li>
              <i class="fas fa-search"></i>
            </li>
            <li><i class="fab fa-twitter"></i></li>
            <li>
              <i class="fab fa-instagram"></i>
            </li>
          </ul>
        </div>
    <?php  }?>
    </div>
  </header>
