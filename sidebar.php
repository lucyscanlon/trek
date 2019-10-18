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


<?php
if ( ! is_active_sidebar( 'trek-sidebar' ) ) {
  return;
}

?>

<aside id="secondary" class="trek_sidebar_widget_area" role="complementary">
  <?php dynamic_sidebar('trek-sidebar'); ?>
</aside>
