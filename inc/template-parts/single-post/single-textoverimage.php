<?php
/*
* The template for displaying a single post if the text over image layout is chosen (chosen in the customiser)
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="singlepost3-whole-container">
    <!--  Checks whether the post has a featured image and displays it  -->
    <div class="singlepost3-featuredimage-container" style="<?php if ( has_post_thumbnail( get_the_ID() ) ) { ?> background:radial-gradient(circle, rgba(0,0,0,0.4 ) 20%, rgba(0,0,0,0) 92%), url('<?php echo $backgroundImg[0]; ?>'); background-size: cover; background-position: center center; <?php } else { ?> background-color: <?php echo get_theme_mod('no_featured_image_color_control', '#1d272e' ); ?>;  <?php } ?>">
      <div class="singlepost3-padding">
        <div class="singlepost3-title-container ReenieBeanie">
          <h1><?php the_title(); ?></h1>
        </div>
        <div class="singlepost1layout-meta-container singlepost3white Montserrat whitetext-hover-color">
          <p>
            <ul>
              <!--  Checks whether to display date for single posts (customiser option)  -->
              <?php if (( get_theme_mod('toggle_singlepost_date', 1 ) ) == 1) { ?>
                <li><?php the_time( get_option( 'date_format' ) )?></li>
              <?php } ?>
              <!--  Checks whether to display author for single posts (customiser option)  -->
              <?php if (( get_theme_mod('toggle_singlepost_author', 1 ) ) == 1) { ?>
                <li>by <?php the_author(); ?></li>
              <?php } ?>
              <!--  Checks whether to display comments info for single posts (customiser option)  -->
              <?php if (( get_theme_mod('toggle_singlepost_comments', 1 ) ) == 1) { ?>
                <li><?php echo trek_comments(); ?></li>
              <?php } ?>
            </ul>
          </p>
        </div>
      </div>
    </div>
    <!--  Checks whether to display categories for single posts (customiser option)  -->
    <?php if (( get_theme_mod('toggle_singlepost_categories', 0 ) ) == 1) { ?>
      <div class="singlepost3-categories-container Montserrat bloglinkcolor">
        <p><?php the_category(); ?></p>
      </div>
    <?php } ?>
    <div class="singlepost-content-container Montserrat">
      <!--  Displays content  -->
      <?php echo the_content(); ?>
    </div>
    <div class="singlepost-linkpages-container Montserrat">
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links"><i class="fas fa-long-arrow-alt-left"></i> ',
          'next_or_number' => 'number',
          'after' => ' <i class="fas fa-long-arrow-alt-right"></i></div>',
        ) );
      ?>
    </div>
    <div class="singlepost-tags-views-whole-container Montserrat">
      <div class="singlepost-tags-container bloglinkcolor">
        <div class="singlepost-tags-wrap">
          <!--  Checks whether to display tags for single posts (customiser option)  -->
          <?php if (( get_theme_mod('toggle_singlepost_tags', 1 ) ) == 1) { ?>
            <?php echo trek_get_tags(); ?>
          <?php } ?>
        </div>
      </div>
      <div class="singlepost-views-container Montserrat">
        <div class="singlepost-views-wrap">
          <!--  Checks whether to display the posts views info for single posts (customiser option)  -->
          <?php if (( get_theme_mod('toggle_singlepost_views', 1 ) ) == 1) { ?>
            <i class="fa fa-eye" aria-hidden="true"></i><?php echo get_post_meta( get_the_ID(), 'trek_post_views', true ); ?>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</article>
