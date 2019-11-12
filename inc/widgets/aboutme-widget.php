<?php
/* Trek - about me widget */

add_action( 'widgets_init', 'trek_aboutme_load_widget');

function trek_aboutme_load_widget() {
  register_widget('trek_aboutme_widget');
}

class trek_aboutme_widget extends WP_Widget {

  /* the widget set up */

  public function __construct() {
    add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
    $widget_ops = array(
      'classname' => 'trek-aboutme-widget',
      'description' => __('Tell your readers a bit about yourself', 'trek' ),
    );
    parent::__construct( 'trek_aboutme_widget', __( 'Trek: About Me', 'trek' ), $widget_ops );
  }


  /* the form for the backend of the widget */

  public function form( $instance ) {
    $defaults = array( 'backgroundImage' => '', 'profilePicture' => '', 'bio' => '', 'autograph' => '', 'readmore' => '', 'link' => '');
    $instance = wp_parse_args( (array) $instance, $defaults );
    $backgroundImage = !empty( $instance[ 'backgroundImage' ] ) ? $instance[ 'backgroundImage' ] : '';
    $profilePicture = !empty( $instance[ 'profilePicture' ] ) ? $instance[ 'profilePicture' ] : '';
    $autograph = !empty( $instance[ 'autograph' ] ) ? $instance[ 'autograph' ] : '';


    ?>

    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'backgroundImage' ) ); ?>"><?php esc_html_e( 'Background Image:', 'trek' ); ?></label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'backgroundImage' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'backgroundImage' ) ); ?>" type="text" value="<?php echo esc_url( $backgroundImage ); ?>"/>
      <button class="upload_image_button button button-primary" style="margin-top: 10px;">Upload a Background Image</button>
    </p>

    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'profilePicture' ) ); ?>"><?php esc_html_e( 'Profile Picture:', 'trek' ); ?></label>
      <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'profilePicture' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'profilePicture' ) ); ?>" type="text" value="<?php echo esc_url( $profilePicture ); ?>"/>
      <button class="upload_image_button button button-primary">Upload a Profile Image</button>
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"><?php esc_html_e( 'Name:', 'trek' ); ?></label>
      <input id="<?php echo esc_attr( $this->get_field_id( 'name' ) ); ?>"
        name="<?php echo esc_attr( $this->get_field_name( 'name' ) ); ?>"
        value="<?php echo esc_attr( $instance[ 'name' ] ); ?>" style="width:96%;"/><br/>
    </p>
    <p>
      <label for="<?php echo esc_attr( $this->get_field_id( 'bio' ) ); ?>"><?php esc_html_e( 'Bio:', 'trek' ); ?></label>
      <textarea id="<?php echo esc_attr( $this->get_field_id( 'bio' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'bio' ) ); ?>" style="width:95%;"
          rows="6"><?php echo esc_attr( $instance[ 'bio' ] ); ?></textarea>
   </p>
   <p>
     <label for="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"><?php esc_html_e( 'Link:', 'trek' ); ?></label>
     <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'link' ) ); ?>"
          name="<?php echo esc_attr( $this->get_field_name( 'link' ) ); ?>" type="text"
          value="<?php echo esc_url( $link ); ?>" style="margin-bottom: 5px"/>
  </p>

  <?php


  }


  /* updates the widget for each new use */

  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    $instance[ 'backgroundImage' ] = ( !empty( $new_instance[ 'backgroundImage' ] ) ) ? $new_instance[ 'backgroundImage' ] : '';
    $instance[ 'profilePicture' ] = ( !empty( $new_instance[ 'profilePicture' ] ) ) ? $new_instance[ 'profilePicture' ] : '';
    $instance[ 'name' ] = ( !empty( $new_instance[ 'name' ] ) ) ? $new_instance[ 'name' ] : '';
    $instance[ 'bio' ] = $new_instance[ 'bio' ];
    $instance[ 'link' ] = ( !empty( $new_instance[ 'link' ] ) ) ? $new_instance[ 'link' ] : '';

    return $instance;

  }




  /*   this is how the widget displays on the blog sidebar */
  public function widget( $args, $instance ) {
    extract( $args );

    $backgroundImage = !empty( $instance[ 'backgroundImage'] ) ? $instance[ 'backgroundImage' ] : '';
    $profilePicture = !empty( $instance[ 'profilePicture'] ) ? $instance[ 'profilePicture' ] : '';
    $name = !empty( $instance[ 'name'] ) ? $instance[ 'name' ] : '';
    $bio = $instance[ 'bio' ];
    $link = $instance[ 'link' ];

    echo sprintf( '%s', $before_widget );

    ?>

    <div class="trek-aboutme-whole-container">
      <?php if ( $backgroundImage ) : ?>
        <div class="trek-aboutme-backgroundimage-container" style="background: url('<?php echo esc_url( $backgroundImage ); ?>'); background-size: cover; background-position: center center;">
        </div>
      <?php endif; ?>
      <?php if ( $profilePicture ) : ?>
        <div class="trek-aboutme-profilepicture-container">
          <img src="<?php echo esc_url( $profilePicture ); ?>">
        </div>
      <?php endif; ?>
      <?php if ( $name ) : ?>
        <div class="trek-aboutme-name-container">
          <h4><?php echo wp_kses_post( $name ); ?></h4>
        </div>
      <?php endif; ?>
      <?php if ( $bio ) : ?>
        <div class="trek-aboutme-bio-container">
          <p><?php echo wp_kses_post( $bio ); ?></p>
        </div>
      <?php endif; ?>
        <?php if ( $link ) : ?>
          <div class="trek-aboutme-readmore-container">
            <p><a href="<?php echo esc_url( $link ); ?>">read more</a></p>
          </div>
        <?php endif; ?>
    </div>

    <?php echo sprintf( '%s', $after_widget );

  }


  public function scripts() {
    wp_enqueue_script( 'mediaupload' );
    wp_enqueue_media();
    wp_enqueue_script( 'mediaupload', get_template_directory_uri() . '/inc/widgets/assets/js/mediaupload.js', array( 'jquery' ));
  }


}
