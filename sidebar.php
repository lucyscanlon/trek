<?php
/*
* This is the sidebar template for the Trek theme
*
*
*
*
* @package TrekLucyIsobel
*
*
*/ ?>
<style>

.trek-widget-width-container a {
  color: <?php echo get_theme_mod('blog_page_link_color'); ?>
}

.trek-widget-width-container a:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}

.trek-widget .tagcloud a {
  background-color: <?php echo get_theme_mod('header_background_color'); ?>
}

.trek-widget .tagcloud a {
  color: <?php echo get_theme_mod('header_text_color'); ?>
}

.trek-widget .tagcloud a:hover  {
  color: <?php echo get_theme_mod('header_text_hover_color'); ?>
}


</style>

<?php
if ( ! is_active_sidebar( 'trek-sidebar' ) ) {
  return;
}

?>

<aside id="secondary" class="trek_sidebar_widget_area" role="complementary">
  <?php dynamic_sidebar('trek-sidebar'); ?>
</aside>
