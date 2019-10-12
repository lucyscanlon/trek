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

.imagepost-readmore-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.imagepost-readmore-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.imagepost-category-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.imagepost-category-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}



</style>

<div class="imagepostlayout-post-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control'); ?>;  <?php } ?>">
  <div class="imagepostlayout-title-container ReenieBeanie">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
  </div>
  <div class="imagepostlayout-meta-container Montserrat">
    <p><ul> <?php if (( get_theme_mod('toggle_archive_date') ) == 1) { ?>

       <li><?php the_time('jS F Y')?></li>

    <?php } ?>


    <?php if (( get_theme_mod('toggle_archive_author') ) == 1) { ?>
       <li>by <?php the_author(); ?></li>

    <?php } ?>

    <?php if (( get_theme_mod('toggle_archive_comments') ) == 1) { ?>

      <li><?php echo trek_comments(); ?></li>

    <?php } ?>

  </ul></p>
  </div>

</div>
<div class="imagepost-excerpt-whole-container">
  <?php if (( get_theme_mod('toggle_archive_categories') ) == 1) { ?>
    <div class="imagepost-category-container Montserrat">
      <p><?php the_category(); ?></p>
    </div>
  <?php } ?>
  <div class="imagepost-excerpt-container Montserrat">
    <p>
      <?php the_excerpt(); ?>
    </p>
  </div>
  <div class="imagepost-readmore-container Montserrat">
    <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
  </div>
</div>
