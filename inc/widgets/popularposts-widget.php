<?php
/* Trek - popular posts widget  */

add_action( 'widgets_init', 'trek_popularposts_load_widget');

function trek_popularposts_load_widget() {
  register_widget('trek_popularposts_widget');
}

class trek_popularposts_widget extends WP_widget {

  /* the widget set up */

  public function __construct() {
    $widget_ops = array(
      'classname' => 'trek-popularposts-widget',
      'description' => __('Display your most popular posts with this widget', 'trek'),
    );
    parent::__construct( 'trek_popularposts_widget', __('Trek: Popular Posts', 'trek'), $widget_ops );
  }

  /*  the form for the backend of the widget */

  public function form( $instance ) {

    $title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $total = ( !empty( $instance[ 'total' ] ) ? absint( $instance[ 'total' ] ) : 4 );

    ?>

    <p>
             <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'trek' ); ?></label>
             <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                    value="<?php echo esc_attr( $instance[ 'title' ] ); ?>" style="width:96%;"/><br/>
    </p>
    <p>
             <label for="<?php echo esc_attr( $this->get_field_id( 'total' ) ); ?>"><?php esc_html_e( 'Number of Posts to Display:', 'trek' ); ?></label>
             <input id="<?php echo esc_attr( $this->get_field_id( 'total' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'total' ) ); ?>" type="number"
                    value="<?php echo esc_attr( $instance[ 'total' ] ); ?>" style="width:96%;"/><br/>
    </p>

   <?php

  }


  /* updates the widget for each use */

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ) ? $new_instance[ 'title' ] : '';
    $instance[ 'total' ] = ( !empty( $new_instance[ 'total' ] ) ) ? $new_instance[ 'total' ] : 0;

    return $instance;

  }



  /*  front end display of widget */

  public function widget( $args, $instance ) {
    extract( $args );

    $title = !empty( $instance[ 'title'] ) ? $instance[ 'title' ] : '';

    $total = absint( $instance[ 'total' ] );

    $posts_args = array(
      'post_type' => 'post',
      'posts_per_page' => $total,
      'meta_key' => 'trek_post_views',
      'orderby' => 'meta_value_num',
      'order' => 'DESC',
    );

    $posts_query = new WP_Query( $posts_args );

    echo sprintf( '%s', $before_widget );

    ?>


    <div class="trek-popularposts-whole-container">
      <?php if ( $title ) : ?>
        <div class="trek-popularposts-title-container">
          <h4><?php echo wp_kses_post( $title ); ?></h4>
        </div>
      <?php endif; ?>
      <div class="trek-popularpost-list-container">
        <?php if( $posts_query->have_posts() ) : ?>
            <?php while( $posts_query->have_posts() ) : $posts_query->the_post(); ?>
              <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );?>
            <li><a href="<?php the_permalink(); ?>"><span class="capitalise"><?php the_title(); ?></span></a><br /><?php echo trek_comments(); ?></li>


            <?php endwhile; ?>

        <?php endif; ?>
      </div>
    </div>

    <?php echo sprintf( '%s', $after_widget );

  }


}
