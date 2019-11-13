<?php
/*
* This is the BLOG BANNER TEMPLATE for the Trek theme
*
* This template appears on the blog page for the posts preview if the grid post layout (whether left or right aligned) option is selected in the customizer
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<?php
$featuredCategory = get_theme_mod('featuredpost_category');
$blogBannerBackground = get_theme_mod('banner_background_image', "https://images.unsplash.com/photo-1513657713647-0182f4ee3bf8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2550&q=80");
$custom_logo_id = get_theme_mod( 'custom_logo' );
$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
<!--  If a featured post is being displayed in the blog banner (customiser option)   -->
<?php if (( get_theme_mod('toggle_blogbanner_featuredpost', 0 ) ) == 1) { ?>
  <?php query_posts("category_name='.$featuredCategory.'"); ?>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
      <div class="featuredpost-image-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control', get_theme_mod('header_background_color', '#1D272E') ); ?>;  <?php } ?>">
        <div class="featuredpost-container-padding">
          <div class="featuredpost-title-container ReenieBeanie whitetext-hover-color">
            <!--  Displays Post Title  -->
            <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
          </div>
          <div class="featuredpost-readmore-container Montserrat whitetext-hover-color">
            <!--  Links to single post  -->
            <a href="<?php the_permalink(); ?>"><?php echo __('Read More', 'trek'); ?></a>
          </div>
        </div>
      </div>
 <?php endwhile; endif; ?>
 <?php wp_reset_query(); ?>
 <!--  If homepage information is displayed in the blog banner instead (customiser option) and site logo is displayed (customiser option)  -->
<?php  } else { ?>
  <div class="featuredpost-homepage-image-container" style="background: url('<?php echo $blogBannerBackground; ?>'); background-position: center center; background-size: cover; ">
    <div class="featuredpost-container-padding">
    <?php if (( get_theme_mod('toggle_blogbanner_logo', 0 ) ) == 1) { ?>
      <div class="featuredpost-logo-container">
        <!--  Displays logo as a link to posts page  -->
        <a href="<?php echo get_theme_mod('homepage_blog_link', get_permalink( get_option('page_for_posts' ) )); ?> "><img src="<?php echo $image[0]; ?>"></a>
      </div>
      <!--  Checks to see if description should be displayed (customiser option)  -->
      <?php if (( get_theme_mod('toggle_blogbanner_description', 1 ) ) == 1) { ?>
        <div class="featuredpost-description-container Montserrat">
          <!--  Displays blog description -->
          <p><?php echo get_bloginfo('description');?></p>
        </div>
      <?php } ?>
    </div>
<?php } else {?>
  <!--  If homepage information is displayed in the blog banner instead (customiser option) and site title is displayed (customiser option)  -->
  <div class="featuredpost-homepage-title-container ReenieBeanie">
    <!--  Displays site title as a link to posts page -->
    <a href="<?php echo get_theme_mod('homepage_blog_link', get_permalink( get_option('page_for_posts' ) ) ); ?> "><h1><?php print get_bloginfo('name'); ?></h1></a>
  </div>
  <!--  Checks whether the description should be displayed (customiser option) -->
  <?php if (( get_theme_mod('toggle_blogbanner_description', 1 ) ) == 1) { ?>
    <div class="featuredpost-description-container Montserrat">
      <!--  Displays blog description -->
      <p><?php echo get_bloginfo('description');?></p>
    </div>
  <?php } ?>
  <?php } ?>
  </div>
<?php }?>
