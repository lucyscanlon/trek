<?php

class Trek_Travel_Stats_Widget extends wP_Widget {

  public function __construct() {

    /* widget set up */
    $widget_ops = array(
      'classname' => 'trek-travelstats-widget',
      'description' => __('A widget to display you travel statistics', 'trek'),
    );
    parent::__construct( 'trek_travelstats_widget', __('Trek: Travel Stats', 'trek' ), $widget_ops );
  }

  //back end display of widget - options for this widget are controlled in the admin panel as we don't want the stats to reset with each use.
  public function form( $instance ) {
    echo '<p>Please update your statistics <a href="./admin.php?page=trek_settings_travelstats">here</a> for this widget!</p>';
  }


  //front end display
  public function widget( $args, $instance ) {
    $continentsVisited = esc_attr( get_option('continents_visited') );
    $countriesVisited = esc_attr( get_option('countries_visited') );
    $citiesVisited = esc_attr( get_option('cities_visited') );
    $flightsTaken = esc_attr( get_option('flights_taken') );

    echo $args['before_widget']; ?>

    <div class="trek-travelstats-whole-container">
      <div class="trek-travelstats-flex-container">
        <i class="fas fa-globe-americas"></i>
        <p><?php echo $continentsVisited ?> Continents</p>
        <p>Travelled</p>
      </div>
      <div class="trek-travelstats-flex-container">
        <i class="fas fa-plane"></i>
        <p><?php echo $flightsTaken ?> Flights</p>
        <p>
          Taken
        </p>
      </div>
      <div class="trek-travelstats-flex-container">
        <i class="fas fa-flag-usa"></i>
        <p><?php echo $countriesVisited ?> Countries</p>
        <p>
          Explored
        </p>
      </div>
      <div class="trek-travelstats-flex-container">
        <i class="fas fa-city"></i>
        <p><?php echo $citiesVisited ?> Cities</p>
        <p>
          Visited
        </p>

      </div>
    </div>

    <?php echo $args['after_widget'];
  }

}

add_action( 'widgets_init', function() {
  register_widget( 'Trek_Travel_Stats_Widget' );
});
