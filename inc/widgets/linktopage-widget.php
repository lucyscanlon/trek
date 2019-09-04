<?php

/*  link to page widget   */

add_action( 'widgets_init', 'trek_linktopage_load_widget' );

function trek_linktopage_load_widget() {
  register_widget( 'trek_linktopage_widget' );
}

class trek_linktopage_widget extends WP_widget {

  /* the widget set up */

  public function __construct() {
    add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
    $widget_ops = array(
      'classname' => 'trek-linktopage-widget',
      'description' => __( 'Link to a page on your site, or an external link with this widget', 'trek' ),
    );
    parent::__construct( 'trek_linktopage_widget', __('Trek: Page link', 'trek' ), $widget_ops );
  }

  /* the form for the backend of the widget  */

  public  function form( $instance ) {
    $defaults = array( 'image' => '', 'title' => '', 'description' => '', 'text' => '', 'link' => '');
    $instance = wp_parse_args( (array) $instance, $defaults );
    $image = !empty( $instance[ 'image' ] ) ? $instance[ 'image' ] : '';
    $title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';
    $description = !empty( $instance[ 'description' ] ) ? $instance[ 'description' ] : '';
    $text = !empty( $instance[ 'text' ] ) ? $instance[ 'text' ] : '';
    $link = !empty( $instance[ 'link' ] ) ? $instance[ 'link' ] : '';

    ?>

    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>"><?php esc_html_e( 'Image:', 'trek' ); ?></label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'image' ) ); ?>" type="text" value="<?php echo esc_url( $image ); ?>"/>
      <button class="upload_image_button button button-primary" style="margin-top: 10px;">Upload an Image</button>
    </p>
    <p>
             <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'trek' ); ?></label>
             <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                    value="<?php echo esc_attr( $instance[ 'title' ] ); ?>" style="width:96%;"/><br/>
    </p>
    <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>"><?php esc_html_e( 'Page Description:', 'trek' ); ?></label>
            <textarea id="<?php echo esc_attr( $this->get_field_id( 'description' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'description' ) ); ?>" style="width:95%;"
                      rows="6"><?php echo esc_attr( $instance[ 'description' ] ); ?></textarea>
   </p>
   <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"><?php esc_html_e( 'Text:', 'trek' ); ?></label>
            <input id="<?php echo esc_attr( $this->get_field_id( 'text' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'text' ) ); ?>"
                   value="<?php echo esc_attr( $instance[ 'text' ] ); ?>" style="width:96%;"/><br/>
   </p>
   <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_html_e( 'Link:', 'trek' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"
                   name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text"
                   value="<?php echo esc_url( $link ); ?>" style="margin-bottom: 5px"/>
  </p>

   <?php

  }


  /*  updates the widget for each use  */

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    $instance[ 'image' ] = ( !empty( $new_instance[ 'image' ] ) ) ? $new_instance[ 'image' ] : '';
    $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ) ? $new_instance[ 'title' ] : '';
    $instance[ 'description' ] = ( !empty( $new_instance[ 'description' ] ) ) ? $new_instance[ 'description' ] : '';
    $instance[ 'text' ] = ( !empty( $new_instance[ 'text' ] ) ) ? $new_instance[ 'text' ] : '';
    $instance[ 'link' ] = ( !empty( $new_instance[ 'link' ] ) ) ? $new_instance[ 'link' ] : '';

    return $instance;


  }


  /* this is how the widget displays on  the blog sidebar  */

  public function widget( $args, $instance ) {
    extract( $args );

    $image = !empty( $instance[ 'image'] ) ? $instance[ 'image' ] : '';
    $title = !empty( $instance[ 'title'] ) ? $instance[ 'title' ] : '';
    $description = !empty( $instance[ 'description'] ) ? $instance[ 'description' ] : '';
    $text = !empty( $instance[ 'text'] ) ? $instance[ 'text' ] : '';
    $link = !empty( $instance[ 'link'] ) ? $instance[ 'link' ] : '';

    echo sprintf( '%s', $before_widget );

    ?>


    <div class="trek-linktopage-whole-container">
      <?php if ( $image ) : ?>
        <div class="trek-linktopage-backgroundimage-container" style="background: url('<?php echo esc_url( $image ); ?>'); background-size: cover; background-position: center center;">
        </div>
      <?php endif; ?>
      <?php if ( $title ) : ?>
        <div class="trek-linktopage-title-container">
          <h4><?php echo wp_kses_post( $title ); ?></h4>
        </div>
      <?php endif; ?>
      <?php if ( $description ) : ?>
        <div class="trek-linktopage-description-container">
          <p><?php echo wp_kses_post( $description ); ?></p>
        </div>
      <?php endif; ?>
      <?php if ( $text ) : ?>
        <?php if ( $link ) : ?>
          <div class="trek-linktopage-readmore-container">
            <p><a href="<?php echo esc_url( $link ); ?>"><?php echo wp_kses_post( $text ); ?></a></p>
          </div>
        <?php endif; ?>
      <?php endif; ?>
    </div>

    <?php  echo sprintf( '%s', $after_widget );
  }

  public function scripts() {
    wp_enqueue_script( 'mediaupload' );
    wp_enqueue_media();
    wp_enqueue_script( 'mediaupload', get_template_directory_uri() . '/inc/widgets/assets/js/mediaupload.js', array( 'jquery' ));
  }

}
