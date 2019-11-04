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
<div class="singlepost3-whole-container">
  <div class="singlepost3-featuredimage-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control', '#1d272e' ); ?>;  <?php } ?>">
    <div class="imagepost-padding">
    <div class="singlepost3-title-container ReenieBeanie">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="page-meta-container-three singlepost3white Montserrat">
      <p><?php the_time('jS F Y')?> <?php echo __('By ', 'trek'); ?><?php the_author(); ?></p>
    </div>

  </div>
</div>
  <div class="singlepost-content-container Montserrat">
    <?php echo the_content(); ?>
  </div>
</div>
