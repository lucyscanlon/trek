<?php
/*
* This is the BLOG BANNER TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the grid post layout (whether left or right aligned) option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<style>

</style>
<?php if (( get_theme_mod('toggle_blogbanner_featuredpost') ) == 1) { ?>


<?php  } else { ?>
  <div class="featuredpost-homepage-image-container" style="background: url('<?php echo $homepage_background_image; ?>'); background-position: center center; background-size: cover; ">
    <div class="featuredpost-homepage-title-container ReenieBeanie" style="color: <?php echo get_theme_mod('homepage_title_color'); ?>; text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color' ); ?> 4px 4px;">
      <h1><?php print get_bloginfo('name'); ?></h1>
    </div>
  </div>
<?php }?>
