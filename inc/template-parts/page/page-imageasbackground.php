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
<style>


.singlepost1layout-meta-container a {
  color: white;
}

.singlepost1layout-meta-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.singlepost3-categories-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.singlepost3-categories-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.singlepost-tags-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.singlepost-tags-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.page-meta-container {
  color: white;
}

</style>
<div class="singlepost3-whole-container">
  <div class="singlepost3-featuredimage-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control'); ?>;  <?php } ?>">
    <div class="singlepost3-title-container ReenieBeanie">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="page-meta-container singlepost3white Montserrat">
      <p><?php the_time('jS F Y')?> By <?php the_author(); ?></p>
    </div>

  </div>
  <div class="singlepost-content-container Montserrat">
    <?php echo the_content(); ?>
  </div>
  <div class="singlepost-tags-like-whole-container Montserrat">
    <div class="singlepost-tags-container">
    </div>
    <div class="singlepost-like-container">

    </div>
  </div>
</div>
