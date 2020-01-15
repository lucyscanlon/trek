<?php
/*
* The template for displaying the Archive pages in the text over image layout (chosen in the customiser)
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<!--  Displays featured image as background, if no featured image then a colour is displayed (customiser option)  -->
<div class="imagepostlayout-post-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control', '#1d272e' ); ?>;  <?php } ?>">
  <div class="imagepost-padding">
    <div class="imagepostlayout-title-container ReenieBeaniePostFont whitetext-hover-color">
      <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
    </div>
    <div class="imagepostlayout-meta-container Montserrat whitetext-hover-color">
      <p>
        <ul>
          <!--  Checks whether to display date on archive display (customiser option)  -->
          <?php if (( get_theme_mod('toggle_archive_date', 1 ) ) == 1) { ?>
            <li><?php the_time( get_option( 'date_format' ) )?></li>
          <?php } ?>
          <!--  Checks whether to display author on archive display (customiser option)  -->
          <?php if (( get_theme_mod('toggle_archive_author', 1 ) ) == 1) { ?>
            <li>by <?php the_author(); ?></li>
          <?php } ?>
          <!--  Checks whether to display comments info on archive display (customiser option)  -->
          <?php if (( get_theme_mod('toggle_archive_comments', 1 ) ) == 1) { ?>
            <li><?php echo trek_comments(); ?></li>
          <?php } ?>
        </ul>
      </p>
    </div>
  </div>
</div>
<div class="imagepost-excerpt-whole-container">
  <!--  Checks whether to display categories on archive display (customiser option)  -->
  <?php if (( get_theme_mod('toggle_archive_categories', 0 ) ) == 1) { ?>
    <div class="imagepost-category-container Montserrat bloglinkcolor">
      <p><?php the_category(); ?></p>
    </div>
  <?php } ?>
  <div class="imagepost-excerpt-container Montserrat">
    <p>
      <!--  Displays the post excerpt  -->
      <?php the_excerpt(); ?>
    </p>
  </div>
  <div class="imagepost-readmore-container Montserrat bloglinkcolor">
    <!--  Links to single post  -->
    <a href="<?php the_permalink(); ?>"><p><?php echo __('Read More', 'trek'); ?></p></a>
  </div>
</div>
