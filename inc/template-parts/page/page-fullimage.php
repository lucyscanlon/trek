<?php
/*
* This is the SINGLE POST LAYOUT OPTION ONE TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the grid post layout (whether left or right aligned) option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<div class="singlepost1-whole-container">
  <div class="singlepost1-featuredimage-container">
    <!--  Displays page featured image  -->
    <img src="<?php echo $backgroundImg[0]; ?>">
  </div>
  <div class="singlepost1-title-container ReenieBeanie">
    <!--  Displays page title  -->
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="page-meta-container Montserrat">
    <!--  Displays page date and author  -->
    <p><?php the_time( get_option( 'date_format' ) )?> <?php echo __('By ', 'trek'); ?>  <?php the_author(); ?></p>
  </div>
  <div class="singlepost-content-container Montserrat">
    <!--  Displays page content  -->
    <?php echo the_content();  ?>
  </div>
</div>
