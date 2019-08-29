<?php
/*
* This is the SINGLE POST LAYOUT OPTION ONE TEMPLATE for the Trek theme
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


.singlepost1layout-meta-container a {
  color: white;
}

.singlepost1layout-meta-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.singlepost3-categories-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.singlepost3-categories-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

</style>
<div class="singlepost3-whole-container">
  <div class="singlepost3-featuredimage-container" style="background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center;">
    <div class="singlepost3-title-container ReenieBeanie">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="singlepost1layout-meta-container singlepost3white Montserrat">
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

  </div>
  <?php if (( get_theme_mod('toggle_singlepost_categories') ) == 1) { ?>
  <div class="singlepost3-categories-container Montserrat">
    <p><?php the_category(); ?></p>
  </div>
<?php } ?>
  <div class="singlepost-content-container Montserrat">
    <?php echo the_content(); ?>
  </div>
</div>
