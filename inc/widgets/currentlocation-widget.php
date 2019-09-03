<?php
/* Trek - current location widget   */

add_action( 'widgets_init', 'trek_currentlocation_load_widget' );

function trek_currentlocation_load_widget() {
  register_widget( 'trek_currentlocation_widget' );
}

class trek_currentlocation_widget extends WP_widget {

  /* the widget set up  */

  public function __construct() {
    add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
    $widget_ops = array(
      'classname' => 'trek-currentlocation-widget',
      'description' => __('Let everyone know your latest travel location!', 'trek'),
    );
    parent::__construct( 'trek_currentlocation_widget', __( 'Trek: Current Location', 'trek' ), $widget_ops );
  }



  public function form( $instance ) {
    $defaults =  array( 'title' => '', 'image' => '', 'location' => '', 'description' => '');
    $instance = wp_parse_args( (array) $instance, $defaults );
    $title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $image = !empty( $instance[ 'image' ] ) ? $instance[ 'image' ] : '';
    $location = !empty( $instance[ 'location' ] ) ? $instance[ 'location' ] : '';
    $description = !empty( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';

    ?>


    <p>
             <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'trek' ); ?></label>
             <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                    value="<?php echo esc_attr( $instance[ 'title' ] ); ?>" style="width:96%;"/><br/>
    </p>
    <p>
              <label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"><?php esc_html_e( 'Image:', 'trek' ); ?></label>
              <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" type="text" value="<?php echo esc_url( $image ); ?>"/>
              <button class="upload_image_button button button-primary" style="margin-top: 10px;">Upload an image</button>
    </p>
    <p>
             <label for="<?php echo esc_attr( $this->get_field_id( 'location' ) ); ?>"><?php esc_html_e( 'Location:', 'trek' ); ?></label>
             <input id="<?php echo esc_attr( $this->get_field_id( 'location' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'location' ) ); ?>"
                    value="<?php echo esc_attr( $instance[ 'location' ] ); ?>" style="width:96%;"/><br/>
    </p>
    <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'Description:', 'trek' ); ?></label>
            <textarea id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" style="width:95%;"
                      rows="6"><?php echo esc_attr( $instance[ 'description' ] ); ?></textarea>
   </p>

    <?php

  }


  /*  updates the widget for each use   */

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ) ? $new_instance[ 'title' ] : '';
    $instance[ 'image' ] = ( !empty( $new_instance[ 'image' ] ) ) ? $new_instance[ 'image' ] : '';
    $instance[ 'location' ] = ( !empty( $new_instance[ 'location' ] ) ) ? $new_instance[ 'location' ] : '';
    $instance[ 'description' ] = ( !empty( $new_instance[ 'description' ] ) ) ? $new_instance[ 'description' ] : '';

    return $instance;


  }


  public function widget( $args, $instance ) {
    extract( $args );

    $title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $image = !empty( $instance[ 'image' ] ) ? $instance[ 'image' ] : '';
    $location = !empty( $instance[ 'location'] ) ? $instance[ 'location' ] : '';
    $description = !empty( $instance[ 'description'] ) ? $instance[ 'description' ] : '';

    echo sprintf( '%s', $before_widget );

    ?>

    <div class="trek-currentlocation-whole-container">
      <?php if ( $title ) : ?>
        <div class="trek-currentlocation-title-container">
          <h3><?php echo wp_kses_post( $title ); ?></h3>
        </div>
      <?php endif; ?>
      <?php if ( $image ) : ?>
        <div class="trek-currentlocation-image-container" style="background: url('<?php echo esc_url( $image ); ?>'); background-size: cover; background-position: center center;">
        </div>
      <?php endif; ?>
      <?php if ( $location ) : ?>
        <div class="trek-currentlocation-location-container">
          <h4><i class="fas fa-map-pin"></i><?php echo wp_kses_post( $location ); ?></h4>
        </div>
      <?php endif; ?>
      <?php if ( $description ) : ?>
        <div class="trek-currentlocation-description-container">
          <p><?php echo wp_kses_post( $description ); ?></p>
        </div>
      <?php endif; ?>
    </div>

    <?php echo sprintf( '%s', $after_widget );

  }


  public function scripts() {
    wp_enqueue_script( 'mediaupload ');
    wp_enqueue_media();
    wp_enqueue_script( 'mediaupload', get_template_directory_uri() . '/inc/widgets/assets/js/mediaupload.js', array( 'jquery' ));

  }


}
