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

              <?php require get_template_directory() . '/inc/template-parts/header/header-one.php'; ?>

            <?php } else if (( get_theme_mod('header_layout_radio_button') ) == 'menuright') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-two.php'; ?>

            <?php  } else if (( get_theme_mod('header_layout_radio_button') ) == 'menuleft') { ?>

              <?php require get_template_directory() . '/inc/template-parts/header/header-three.php'; ?>

            <?php  }?>
    </div>
  </header>
