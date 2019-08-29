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

class trek_aboutme_widget extends WP_Widget {
  public function __construct() {
    $widgets_ops = array(
      'classname' => 'trek-aboutme-widget',
      'description' => 'Add a short description about yourself on your sidebar',
    );
    parent::__construct( 'trek_aboutme', 'Trek About Me Widget', $widgets_ops );
  }

  //back end display of widgets
  public function form( $instance ){
    echo '<p>
    hello this is the widget
    </p>';
  }

  //front end display of widgets
  public function widget( $args, $instance ){

  }

}

add_action('widgets_init', function() {
  register_widget('trek_aboutme_widget');
});


// edit default wordpress widgets

function trek_tag_cloud_font_change( $args ) {
  $args['smallest'] = 8;
  $args['largest'] = 8;

  return $args;
}

add_filter( 'widget_tag_cloud_args', 'trek_tag_cloud_font_change');



//popular posts custom widget

function trek_save_post_views( $postID ) {
  $metaKey = 'trek_post_views';
  $views = get_post_meta( $postID, $metaKey, true );

  $count = ( empty( $views ) ? 0 : $views );
  $count++;

  update_post_meta( $postID, $metaKey, $count );
}

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); 
