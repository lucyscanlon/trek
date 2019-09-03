<?php
/*
* This is the widgets template for the Trek theme
*
* T
*
*
* @package TrekLucyIsobel
*
*
*/

// edit default wordpress widget - tag cloud changing font changes

function trek_tag_cloud_font_change( $args ) {
  $args['smallest'] = 8;
  $args['largest'] = 8;

  return $args;
}

add_filter( 'widget_tag_cloud_args', 'trek_tag_cloud_font_change');



//popular posts - collects post views function

function trek_save_post_views( $postID ) {
  $metaKey = 'trek_post_views';
  $views = get_post_meta( $postID, $metaKey, true );

  $count = ( empty( $views ) ? 0 : $views );
  $count++;

  update_post_meta( $postID, $metaKey, $count );

}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
