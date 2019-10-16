<?php
/*
* This is the SINGLE POST LAYOUT OPTION TWO TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the grid post layout (whether left or right aligned) option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<div class="singlepost2-whole-container">
  <?php if (( get_theme_mod('toggle_singlepost_categories') ) == 1) { ?>
  <div class="singlepost2-categories-container Montserrat bloglinkcolor">
    <p><?php the_category(); ?></p>
  </div>
<?php } ?>
  <div class="singlepost2-title-container ReenieBeanie">
    <h1><?php the_title(); ?></h1>
  </div>
  <div class="singlepost1layout-meta-container Montserrat bloglinkcolor">
    <p><ul> <?php if (( get_theme_mod('toggle_singlepost_date') ) == 1) { ?>

       <li><?php the_time('jS F Y')?></li>

    <?php } ?>


    <?php if (( get_theme_mod('toggle_singlepost_author') ) == 1) { ?>
       <li>by <?php the_author(); ?></li>

    <?php } ?>

    <?php if (( get_theme_mod('toggle_singlepost_comments') ) == 1) { ?>

      <li><?php echo trek_comments(); ?></li>

    <?php } ?>

  </ul></p>
  </div>
  <?php if ( has_post_thumbnail( get_the_ID()  ) ) { ?>
  <div class="singlepost2-featuredimage-container" style="background: url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">

  </div>
<?php } ?>
  <div class="singlepost-content-container Montserrat">
    <?php echo the_content(); ?>
  </div>
  <div class="singlepost-tags-views-whole-container Montserrat">
    <div class="singlepost-tags-container bloglinkcolor">
      <div class="singlepost-tags-wrap">
        <?php if (( get_theme_mod('toggle_singlepost_tags') ) == 1) { ?>
          <?php echo trek_get_tags(); ?>
        <?php } ?>
      </div>
    </div>
    <div class="singlepost-views-container Montserrat">
      <div class="singlepost-views-wrap">
        <?php if (( get_theme_mod('toggle_singlepost_views') ) == 1) { ?>
          <i class="fa fa-eye" aria-hidden="true"></i><?php echo get_post_meta( get_the_ID(), 'trek_post_views', true ); ?>
        <?php } ?>
    </div>
    </div>
  </div>
</div>
