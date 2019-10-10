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

.featuredpost-homepage-title-container a {
  color: <?php echo get_theme_mod('blog_banner_text_color'); ?>;
  text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color' ); ?> 4px 4px;
}

.featuredpost-description-container {
  color: <?php echo get_theme_mod('blog_banner_text_color'); ?>;
  text-shadow: <?php echo get_theme_mod('blog_banner_text_shadow_color' ); ?> 1px 1px;
}




</style>
<?php

$featuredCategory = get_theme_mod('featuredpost_category');
$blogBannerBackground = get_theme_mod('banner_background_image');

$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );


?>


<?php if (( get_theme_mod('toggle_blogbanner_featuredpost') ) == 1) { ?>
  <?php query_posts("category_name='.$featuredCategory.'"); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
   <div class="featuredpost-image-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control'); ?>;  <?php } ?>">
     <div class="featuredpost-container-padding">
     <div class="featuredpost-title-container ReenieBeanie">
       <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
     </div>
     <div class="featuredpost-readmore-container Montserrat">
       <a href="<?php the_permalink(); ?>">read more</a>
     </div>
   </div>
   </div>

 <?php endwhile; endif; ?>

 <?php wp_reset_query(); ?>

<?php  } else { ?>
  <div class="featuredpost-homepage-image-container" style="background: url('<?php echo $blogBannerBackground; ?>'); background-position: center center; background-size: cover; ">
    <div class="featuredpost-container-padding">
    <?php if (( get_theme_mod('toggle_blogbanner_logo') ) == 1) { ?>
      <div class="featuredpost-logo-container">
      <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><img src="<?php echo $image[0]; ?>"></a>
    </div>
      <?php if (( get_theme_mod('toggle_blogbanner_description') ) == 1) { ?>
        <div class="featuredpost-description-container Montserrat">
          <p><?php echo get_bloginfo('description');?></p>
        </div>
      <?php } ?>
    </div>
    <?php } else {?>
    <div class="featuredpost-homepage-title-container ReenieBeanie">
      <a href="<?php echo get_theme_mod('homepage_readmore_link'); ?> "><h1><?php print get_bloginfo('name'); ?></h1></a>
    </div>
    <?php if (( get_theme_mod('toggle_blogbanner_description') ) == 1) { ?>
      <div class="featuredpost-description-container Montserrat">
        <p><?php echo get_bloginfo('description');?></p>
      </div>
    <?php } ?>
    <?php } ?>
  </div>
<?php }?>
