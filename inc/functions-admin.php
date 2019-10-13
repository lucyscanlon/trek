<?php

function trek_add_admin_page() {

  // Generates admin page
  add_menu_page( 'Trek Options', 'Trek', 'manage_options', 'trek_settings', 'trek_create_page', 'dashicons-admin-site', 110 );

  // Generates admin submenu
  add_submenu_page( 'trek_settings', 'Trek', 'Trek', 'manage_options', 'trek_settings', 'trek_create_page');

  add_submenu_page( 'trek_settings', 'Trek Travel Stats', 'Travel Stats', 'manage_options', 'trek_settings_travelstats', 'trek_travelstats_create_page');

  add_action( 'admin_init', 'trek_custom_settings');

}

add_action( 'admin_menu', 'trek_add_admin_page');

function trek_create_page() {
  //grabs template for page
  require_once( get_template_directory() . '/inc/template-parts/admin/admin-trek.php');
}

function trek_travelstats_create_page() {
  //grabs template for page
  require_once( get_template_directory() . '/inc/template-parts/admin/admin-travelstats.php');
}


function trek_custom_settings() {

  //creates custom settings fields

  //trek

  //trek travel stats
  register_setting('trek-travelstats-group', 'continents_visited');
  register_setting('trek-travelstats-group', 'countries_visited');
  register_setting('trek-travelstats-group', 'cities_visited');
  register_setting('trek-travelstats-group', 'flights_taken');

  add_settings_section( 'trek-travelstats-options', '', 'trek_travelstats_options', 'trek_settings_travelstats');

  add_settings_field('continents-visited', 'Number of Continents Visited', 'trek_travelstats_continentsvisited', 'trek_settings_travelstats', 'trek-travelstats-options');
  add_settings_field('countries-visited', 'Number of Countries Visited', 'trek_travelstats_countriesvisited', 'trek_settings_travelstats', 'trek-travelstats-options');
  add_settings_field('cities-visited', 'Number of Cities Visited', 'trek_travelstats_citiesvisited', 'trek_settings_travelstats', 'trek-travelstats-options');
  add_settings_field('flights-taken', 'Number of Flights Taken', 'trek_travelstats_flightstaken', 'trek_settings_travelstats', 'trek-travelstats-options');

}


// Functions for Trek Travel Stats

function trek_travelstats_options() {

}

function trek_travelstats_continentsvisited() {
  $continentsVisited = esc_attr( get_option('continents_visited') );
  echo '<input type="text" name="continents_visited" value="'.$continentsVisited.'" />';
}

function trek_travelstats_countriesvisited() {
  $countriesVisited = esc_attr( get_option('countries_visited') );
  echo '<input type="text" name="countries_visited" value="'.$countriesVisited.'" />';
}

function trek_travelstats_citiesvisited() {
  $citiesVisited = esc_attr( get_option('cities_visited') );
  echo '<input type="text" name="cities_visited" value="'.$citiesVisited.'" />';
}

function trek_travelstats_flightstaken() {
  $flightsTaken = esc_attr( get_option('flights_taken') );
  echo '<input type="text" name="flights_taken" value="'.$flightsTaken.'" />';
}
