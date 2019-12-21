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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="singlepost1-whole-container">
    <div class="singlepost1-featuredimage-container">
      <!--  Displays the featured image  -->
      <img src="<?php echo $backgroundImg[0]; ?>">
    </div>
    <!--  Checks whether to display categories for single posts (customiser option)  -->
    <?php if (( get_theme_mod('toggle_singlepost_categories', 0 ) ) == 1) { ?>
      <div class="singlepost1-categories-container Montserrat bloglinkcolor">
        <p><?php the_category(); ?></p>
      </div>
    <?php } ?>
    <div class="singlepost1-title-container ReenieBeanie">
      <h1><?php the_title(); ?></h1>
    </div>
    <div class="singlepost1layout-meta-container Montserrat bloglinkcolor">
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
    <div class="singlepost-content-container Montserrat">
      <!--  Displays content  -->
      <?php echo the_content();  ?>
    </div>
    <div class="singlepost-linkpages-container Montserrat">
      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">← ',
          'next_or_number' => 'number',
          'after' => ' →</div>',
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
