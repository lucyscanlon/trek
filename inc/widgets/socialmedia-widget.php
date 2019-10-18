<?php

/* Trek - social media links widget */

add_action( 'widgets_init', 'trek_socialmedia_load_widget');

function trek_socialmedia_load_widget() {
  register_widget( 'trek_socialmedia_widget' );
}

class trek_socialmedia_widget extends WP_widget {


  /*  widget set up  */
  public function __construct() {
    $widget_ops = array(
      'classname' => 'trek-socialmedia-widget',
      'description' => __('Add your social media links to your bio', 'trek' ),
    );
    parent::__construct( 'trek_socialmedia_widget', __('Trek: Social Media Links', 'trek' ), $widget_ops );
  }

  /*  form for back end of widget */

  public function form( $instance ){
    $defaults = array( 'title' => '');
    $instance = wp_parse_args( (array) $instance, $defaults );
    $title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';


    ?>

    <p>
             <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_html_e( 'Title:', 'trek' ); ?></label>
             <input id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"
                    name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>"
                    value="<?php echo esc_attr( $instance[ 'title' ] ); ?>" style="width:96%;"/><br/>
                    <small>Please add or edit social media links in the Customiser > Your Theme Options > Social Media </small>
    </p>

    <?php

  }


  /* updates the widget for each use */


  public function update( $new_instance, $old_instance ) {
    $instance = $old_instance;

    $instance[ 'title' ] = ( !empty( $new_instance[ 'title' ] ) ) ? $new_instance[ 'title' ] : '';

    return $instance;


  }


  /* front end display of widget */


  public function widget( $args, $instance ) {
    extract( $args );

    $title = !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : '';

    echo sprintf( '%s', $before_widget );

    ?>

    <div class="trek-socialmedia-whole-container">
      <?php if ( $title ) : ?>
        <div class="trek-socialmedia-title-container">
          <h3><?php echo wp_kses_post( $title ); ?></h3>
        </div>
      <?php endif; ?>
      <div class="trek-socialmedia-list-container">
        <ul>
          <?php if (( get_theme_mod('toggle_switch_twitter', 1 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('twitter_link')?>" target="blank"><i class="fab fa-twitter"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_facebook', 1 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('facebook_link')?>" target="blank"><i class="fab fa-facebook"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_instagram', 1 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('instagram_link')?>" target="blank"><i class="fab fa-instagram"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_pinterest', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('pinterest_link')?>" target="blank"><i class="fab fa-pinterest"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_googleplus', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('googleplus_link')?>" target="blank"><i class="fab fa-google-plus"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_youtube', 1 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('youtube_link')?>" target="blank"><i class="fab fa-youtube"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_linkedin', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('linkedin_link')?>" target="blank"><i class="fab fa-linkedin"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_snapchat', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('snapchat_link')?>" target="blank"><i class="fab fa-snapchat-ghost"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_goodreads', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('goodreads_link')?>" target="blank"><i class="fab fa-goodreads"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_shop', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('shop_link')?>" target="blank"><i class="fas fa-shopping-cart"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_email', 1 ) ) == 1){ ?>
              <li><a href=mailto:"<?php echo get_theme_mod('email_link')?>" target="blank"><i class="far fa-envelope-open"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_vimeo', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('vimeo_link')?>" target="blank"><i class="fab fa-vimeo-v"></i></a></li>
          <?php } ?>
          <?php if (( get_theme_mod('toggle_switch_tumblr', 0 ) ) == 1){ ?>
              <li><a href="<?php echo get_theme_mod('tumblr_link')?>" target="blank"><i class="fab fa-tumblr"></i></a></li>
          <?php } ?>

        </ul>
      </div>
    </div>

    <?php echo sprintf( '%s', $after_widget );

  }

}
