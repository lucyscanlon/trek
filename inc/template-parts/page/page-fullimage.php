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
    <img src="<?php echo $backgroundImg[0]; ?>">
  </div>
  <div class="singlepost1-title-container ReenieBeanie">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="page-meta-container Montserrat">
    <p><?php the_time('jS F Y')?> <?php echo __('By ', 'trek'); ?>  <?php the_author(); ?></p>

  </div>
  <div class="singlepost-content-container Montserrat">
    <?php echo the_content();  ?>
  </div>

</div>
