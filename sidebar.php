<?php
/*
* The default template for displaying the sidebar (the widget area)
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package Trek
*/
?>
<?php
if ( ! is_active_sidebar( 'trek-sidebar' ) ) {
  return;
}

?>

<aside id="secondary" class="trek_sidebar_widget_area" role="complementary">
  <?php dynamic_sidebar('trek-sidebar'); ?>
</aside>
