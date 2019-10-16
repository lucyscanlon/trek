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
  <?php if ( has_post_thumbnail( get_the_ID() ) ) {?>
  <div class="gridpostlayout-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; order: 2;">

  </div>
<?php }  ?>
  <div class="gridpostlayout-information-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> width: 60%; <?php } else { ?> width: 100%; <?php } ?> order: 1;">
      <div class="gridpostlayout-info-categories-readmore-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> width: 90%; <?php } else { ?> width: 94%; <?php } ?>">
        <?php if (( get_theme_mod('toggle_blog_categories') ) == 1) { ?>
        <div class="gridpostlayout-info-categories-container Montserrat bloglinkcolor">
          <p><?php the_category(); ?></p>
        </div>
      <?php } ?>
      <div class="gridpostlayout-title-container ReenieBeanie bloglinkcolor">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
      <div class="gridpostlayout-meta-container Montserrat bloglinkcolor">
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
      <div class="gridpostlayout-excerpt-container Montserrat">
        <p>
          <?php the_excerpt(); ?>
        </p>
      </div>
      <div class="gridpostlayout-readmore-container Montserrat bloglinkcolor">
        <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
      </div>
      </div>
  </div>

</div>
