<?php
/*
* The template for displaying the index if the full image layout is chosen (chosen in the customiser)
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<div class="widepostlayout-wholepost-container" <?php body_class( $class ); ?>>
  <div class="widepost-layout-featuredimage-container">
    <!--  Displays featured image  -->
    <img src="<?php echo $backgroundImg[0]; ?>">
  </div>
  <!--  Checks whether to display categories on index display (customiser option)  -->
  <?php if (( get_theme_mod('toggle_blog_categories', 0 ) ) == 1) { ?>
    <div class="widepostlayout-categories-container Montserrat bloglinkcolor">
      <p><?php the_category(); ?></p>
    </div>
  <?php } ?>
  <div class="widepostlayout-title-container ReenieBeanie bloglinkcolor">
    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
  </div>
  <div class="widepostlayout-meta-container Montserrat bloglinkcolor">
    <p>
      <ul>
        <!--  Checks whether to display date on index display (customiser option)  -->
        <?php if (( get_theme_mod('toggle_blog_date', 1 ) ) == 1) { ?>
          <li><?php the_time( get_option( 'date_format' ) )?></li>
        <?php } ?>
        <!--  Checks whether to display author on index display (customiser option)  -->
        <?php if (( get_theme_mod('toggle_blog_author', 1 ) ) == 1) { ?>
          <li>by <?php the_author(); ?></li>
        <?php } ?>
        <!--  Checks whether to display comments info on index display (customiser option)  -->
        <?php if (( get_theme_mod('toggle_blog_comments', 1 ) ) == 1) { ?>
          <li><?php echo trek_comments(); ?></li>
        <?php } ?>
      </ul>
    </p>
  </div>
  <div class="widepostlayout-content-container Montserrat">
    <p>
      <!--  Displays the post excerpt  -->
      <?php the_excerpt(); ?>
    </p>
  </div>
  <div class="widepostlayout-readmore-container Montserrat bloglinkcolor">
    <!--  Links to single post  -->
    <a href="<?php the_permalink(); ?>"><p><?php echo __('Read More', 'trek'); ?></p></a>
  </div>
</div>
