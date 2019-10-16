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
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="page-meta-container Montserrat">
    <p><?php the_time('jS F Y')?> By <?php the_author(); ?></p>
  </div>
  <?php if ( has_post_thumbnail( get_the_ID()  ) ) { ?>
  <div class="singlepost2-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">

  </div>
<?php } ?>
  <div class="singlepost-content-container Montserrat">
    <?php echo the_content(); ?>
  </div>
</div>
