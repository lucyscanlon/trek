<?php
/*
* This is the functions.php page for the Trek theme
*
* This page links together the functionality of the theme.
*
*
* @package TrekLucyIsobel
*
*
*/

?>
<?php
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-custom.php';
require get_template_directory() . '/inc/enqueue.php';



/*  widgets   */
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/aboutme-widget.php';
require get_template_directory() . '/inc/widgets/currentlocation-widget.php';
require get_template_directory() . '/inc/widgets/socialmedia-widget.php';
require get_template_directory() . '/inc/widgets/popularposts-widget.php';
