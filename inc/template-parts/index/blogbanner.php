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

.featuredpost-readmore-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.featuredpost-title-container a {
  color: white;
}

.featuredpost-title-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

</style>
<?php

$featuredCategory = get_theme_mod('featuredpost_category');


?>


<?php if (( get_theme_mod('toggle_blogbanner_featuredpost') ) == 1) { ?>
  <?php query_posts("category_name='.$featuredCategory.'"); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
   <div class="featuredpost-image-container" style="background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">
     <div class="featuredpost-title-container ReenieBeanie">
       <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
     </div>
     <div class="featuredpost-readmore-container Montserrat">
       <a href="<?php the_permalink(); ?>">read more</a>
     </div>
   </div>

 <?php endwhile; endif; ?>

 <?php wp_reset_query(); ?>

<?php  } else { ?>
  <div class="featuredpost-homepage-image-container" style="background: url('<?php echo $homepage_background_image; ?>'); background-position: center center; background-size: cover; ">
    <div class="featuredpost-homepage-title-container ReenieBeanie" style="color: <?php echo get_theme_mod('homepage_title_color'); ?>; text-shadow: <?php echo get_theme_mod('homepage_title_shadow_color' ); ?> 4px 4px;">
      <h1><?php print get_bloginfo('name'); ?></h1>
    </div>
  </div>
<?php }?>
