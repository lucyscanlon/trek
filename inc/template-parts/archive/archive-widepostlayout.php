<?php
/*
* This is the WIDE POST LAYOUT TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the wide post layout option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>

<style>

.widepostlayout-categories-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.widepostlayout-categories-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.widepostlayout-meta-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.widepostlayout-meta-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.widepostlayout-readmore-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.widepostlayout-readmore-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}


</style>

<div class="widepostlayout-wholepost-container">
  <div class="widepost-layout-featuredimage-container">
    <img src="<?php echo $backgroundImg[0]; ?>">
  </div>
  <?php if (( get_theme_mod('toggle_archive_categories') ) == 1) { ?>
  <div class="widepostlayout-categories-container Montserrat">
    <p><?php the_category(); ?></p>
  </div>
<?php } ?>
<div class="widepostlayout-title-container ReenieBeanie">
  <h1><?php the_title(); ?></h1>
</div>
<div class="widepostlayout-meta-container Montserrat">
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
<div class="widepostlayout-content-container Montserrat">
  <p>
    <?php the_excerpt(); ?>
  </p>
</div>
<div class="widepostlayout-readmore-container Montserrat">
    <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
  </div>
</div>
