<?php
/*
* This is the GRID POST LAYOUT TEMPLATE for the Trek theme
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


.gridpostlayout-info-categories-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.gridpostlayout-info-categories-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.gridpostlayout-info-readmore-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.gridpostlayout-info-readmore-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.gridpostlayout-readmore-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.gridpostlayout-readmore-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.gridpostlayout-meta-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.gridpostlayout-meta-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.gridpostlayout-title-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.gridpostlayout-title-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}


</style>

<div class="gridpostlayout-post-container">
  <?php if ( has_post_thumbnail( get_the_ID() ) ) {?>
  <div class="gridpostlayout-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">

  </div>
  <?php }  ?>
  <div class="gridpostlayout-information-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> width: 60%; <?php } else { ?> width: 100%; <?php } ?>">
      <div class="gridpostlayout-info-categories-readmore-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> width: 90%; <?php } else { ?> width: 94%; <?php } ?>">
        <?php if (( get_theme_mod('toggle_archive_categories') ) == 1) { ?>
        <div class="gridpostlayout-info-categories-container Montserrat">
          <p><?php the_category(); ?></p>
        </div>
      <?php } ?>
      <div class="gridpostlayout-title-container ReenieBeanie">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </div>
      <div class="gridpostlayout-meta-container Montserrat">
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
      <div class="gridpostlayout-excerpt-container Montserrat">
        <p>
          <?php the_excerpt(); ?>
        </p>
      </div>
      <div class="gridpostlayout-readmore-container Montserrat">
        <a href="<?php the_permalink(); ?>"><p>Read More</p></a>
      </div>
      </div>
  </div>

</div>
