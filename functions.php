<?php
/*
* Trek theme functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Trek
*/
?>
<?php
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/customizer-custom.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/functions-admin.php';
require get_template_directory() . '/inc/fonts/google-fonts.php';




/*  widgets   */
require get_template_directory() . '/inc/widgets/widgets.php';
require get_template_directory() . '/inc/widgets/aboutme-widget.php';
require get_template_directory() . '/inc/widgets/currentlocation-widget.php';
require get_template_directory() . '/inc/widgets/socialmedia-widget.php';
require get_template_directory() . '/inc/widgets/popularposts-widget.php';
require get_template_directory() . '/inc/widgets/linktopage-widget.php';
require get_template_directory() . '/inc/widgets/travelstats-widget.php';


/*  required plugins  */

require get_template_directory() . '/inc/requiredplugins/required-plugins.php';

/*  import demo content  */

require get_template_directory() . '/inc/requiredplugins/demo-import.php';


/*  mobile detect   */

require get_template_directory() . '/inc/mobile-detect/mobile_detect.php';



/* theme update checker */

require 'theme_update_check.php';
$KernlUpdater = new ThemeUpdateChecker(
    'trek',
    'https://kernl.us/api/v1/theme-updates/5de8dc30965bfe4ebd3e0cbb/'
);


/* content width */

if ( ! isset( $content_width ) )
    $content_width = 1500;
?>
