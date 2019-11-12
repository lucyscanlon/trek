<?php
/*
* This is the GRID POST LAYOUT TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the grid post layout (whether left or right aligned) option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
* IMAGE IS ON THE RIGHT IN THIS TEMPLATE. INFORMATION ON THE LEFT
*/

?>

<div class="gridpostlayout-post-container">
  <!--  Checks if the post has a featured image or not  -->
  <?php if ( has_post_thumbnail( get_the_ID() ) ) {?>
    <!--  If post has featured image, it is displayed. If not a color is displayed instead (customiser option)  -->
    <div class="gridpostlayout-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; order: 2;">
    </div>
  <?php }  ?>
  <!--  Styles on this container generate correct width depending on whether there is a featured image  -->
  <div class="gridpostlayout-information-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> width: 60%; <?php } else { ?> width: 100%; <?php } ?> order: 1;">
    <div class="gridpostlayout-info-categories-readmore-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> width: 90%; <?php } else { ?> width: 94%; <?php } ?>">
        <!--  Checks whether to display categories on index display (customiser option)  -->
        <?php if (( get_theme_mod('toggle_blog_categories', 0 ) ) == 1) { ?>
          <div class="gridpostlayout-info-categories-container Montserrat bloglinkcolor">
            <p><?php the_category(); ?></p>
          </div>
        <?php } ?>
        <div class="gridpostlayout-title-container ReenieBeanie bloglinkcolor">
          <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
        </div>
        <div class="gridpostlayout-meta-container Montserrat bloglinkcolor">
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
        <div class="gridpostlayout-excerpt-container Montserrat">
          <p>
            <!--  Displays the post excerpt  -->
            <?php the_excerpt(); ?>
          </p>
        </div>
        <div class="gridpostlayout-readmore-container Montserrat bloglinkcolor">
          <!--  Links to single post  -->
          <a href="<?php the_permalink(); ?>"><p><?php echo __('Read More', 'trek'); ?></p></a>
        </div>
      </div>
  </div>
</div>
