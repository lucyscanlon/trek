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
<div class="widepostlayout-wholepost-container">
  <div class="widepost-layout-featuredimage-container">
    <img src="<?php echo $backgroundImg[0]; ?>">
  </div>
  <?php if (( get_theme_mod('toggle_blog_categories', 0 ) ) == 1) { ?>
  <div class="widepostlayout-categories-container Montserrat bloglinkcolor">
    <p><?php the_category(); ?></p>
  </div>
<?php } ?>
<div class="widepostlayout-title-container ReenieBeanie bloglinkcolor">
  <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
</div>
<div class="widepostlayout-meta-container Montserrat bloglinkcolor">
  <p><ul> <?php if (( get_theme_mod('toggle_blog_date', 1 ) ) == 1) { ?>

     <li><?php the_time('jS F Y')?></li>

  <?php } ?>


  <?php if (( get_theme_mod('toggle_blog_author', 1 ) ) == 1) { ?>
     <li>by <?php the_author(); ?></li>

  <?php } ?>

  <?php if (( get_theme_mod('toggle_blog_comments', 1 ) ) == 1) { ?>

    <li><?php echo trek_comments(); ?></li>

  <?php } ?>

</ul></p>

</div>
<div class="widepostlayout-content-container Montserrat">
  <p>
    <?php the_excerpt(); ?>
  </p>
</div>
<div class="widepostlayout-readmore-container Montserrat bloglinkcolor">
    <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
  </div>
</div>
