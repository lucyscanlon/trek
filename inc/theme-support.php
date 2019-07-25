<?php
/*
* This is the theme support page of the Trek Theme
*
* This page adds some default WordPress features to the theme e.g a custom logo.
*
*
* @package TrekLucyIsobel
*
*
*/
function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
