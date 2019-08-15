<?php
/*
* This is the IMAGE POST LAYOUT TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the image post layout option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<style>

.imagepostlayout-meta-container a {
  color: white;
}

.imagepostlayout-meta-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.imagepostlayout-readmore-container a {
  color: white;
}

.imagepostlayout-readmore-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.imagepostlayout-title-container a {
  color: white;
}

.imagepostlayout-title-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.imagepostlayout-categories-container a {
  color: white;
}

.imagepostlayout-categories-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

</style>

<div class="imagepostlayout-post-container" style="background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">
  <div class="imagepostlayout-title-container ReenieBeanie">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
  </div>
  <div class="imagepostlayout-meta-container Montserrat">
    <p><ul> <?php if (( get_theme_mod('toggle_blog_date') ) == 1) { ?>

       <li><?php the_time('jS F Y')?></li>

    <?php } ?>


    <?php if (( get_theme_mod('toggle_blog_author') ) == 1) { ?>
       <li>by <?php the_author(); ?></li>

    <?php } ?>

    <?php if (( get_theme_mod('toggle_blog_comments') ) == 1) { ?>

      <li><?php echo trek_comments(); ?></li>

    <?php } ?>

  </ul></p>
  </div>
  <div class="imagepostlayout-readmore-container Montserrat">
    <a href="<?php the_permalink(); ?>"><h3>Read More</h3></a>
  </div>
</div>
