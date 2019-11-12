<?php
/*
* This is the SINGLE POST LAYOUT OPTION TWO TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the grid post layout (whether left or right aligned) option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<div class="singlepost2-whole-container">
  <div class="singlepost2-title-container ReenieBeanie">
    <!--  Displays page title  -->
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="page-meta-container Montserrat">
    <!--  Displays page date and author  -->
    <p><?php the_time( get_option( 'date_format' ) )?> <?php echo __('By ', 'trek'); ?><?php the_author(); ?></p>
  </div>
  <!--  Checks if the page has a featured image and displays it  -->
  <?php if ( has_post_thumbnail( get_the_ID()  ) ) { ?>
    <div class="singlepost2-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">
    </div>
  <?php } ?>
  <div class="singlepost-content-container Montserrat">
    <!--  Displays page content  -->
    <?php echo the_content(); ?>
  </div>
</div>
