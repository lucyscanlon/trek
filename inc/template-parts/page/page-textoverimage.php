<?php
/*
* The template for displaying a page if the text over image layout is chosen (chosen in the customiser)
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<div class="singlepost3-whole-container">
  <!--  Checks if page has a featured image and displays it  -->
  <div class="singlepost3-featuredimage-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control', get_theme_mod('header_background_color', '#1D272E') ); ?>;  <?php } ?>">
    <div class="imagepost-padding">
      <div class="singlepost3-title-container ReenieBeaniePostFont">
        <!--  Displays page title  -->
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="page-meta-container-three singlepost3white Montserrat">
        <!--  Displays page date and author  -->
        <p><?php the_time( get_option( 'date_format' ) )?> <?php echo __('By ', 'trek'); ?><?php the_author(); ?></p>
      </div>
    </div>
  </div>
  <div class="singlepost-content-container Montserrat">
    <!--  Displays page content -->
    <?php echo the_content(); ?>
  </div>
</div>
