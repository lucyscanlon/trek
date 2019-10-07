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


function trek_register_nav_menu() {
  register_nav_menu( 'primary', 'Header Navigation Menu');
  register_nav_menu('secondary', 'Blog Categories Menu' );
}

add_action( 'after_setup_theme', 'trek_register_nav_menu');

add_action( 'after_setup_theme', function(){
	remove_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
}, 11 );


/*  function for retrieveing comment info   */
function trek_comments() {
  $comments_num = get_comments_number();
  $comments;
  if( comments_open() ){
    if( $comments_num == 0) {
      $comments = __('No comments', 'trek');
    } else if ( $comments_num > 1) {
      $comments = $comments_num . __(' Comments', 'trek');
    } else {
      $comments = __('1 Comment', 'trek');
    }
    $comments = '<a href="'. get_comments_link() . '"><span></span>' . $comments . '</a>';
  } else {
    $comments = __('Comments are closed', 'trek');
  }


  return $comments;
}






//sidebar functions
function trek_sidebar_init() {
  register_sidebar(
    array(
      'name' => esc_html__( 'Trek Sidebar', 'trek '),
      'id' => 'trek-sidebar',
      'description' => 'Dynamic Sidebar',
      'before_widget' => '<section id="%1$s" class="trek-widget Montserrat %2$s"> <div class="trek-widget-width-container">',
      'after_widget' => '</div></section>',
      'before_title' => '<h2 class="trek-widget-title Montserrat">',
      'after_title' => '</h2>'

    )
  );
}

add_action('widgets_init', 'trek_sidebar_init');


//pagination
// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {

	function wpex_pagination() {

		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';

		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}

}

// single post naviagtion bar
function trek_post_navigation(){

  $nav = '<div class="single-post-navigation Montserrat">';

  $prev = get_previous_post_link( '<div class="single-link-nav">%link →</div>', '<i>(Previous)</i> %title');
  $nav .= '<div class="text-right singlepostnav-right-container" style="width: 50%; float: right;">' . $prev . '</div>';

  $next = get_next_post_link('<div class="post-link-nav">← %link</div>', '<i>(Newer)</i> %title');
  $nav .= '<div class="text-right singlepostnav-left-container" style="width: 50%; float: left;">' . $next . '</div>';

  $nav .= '</div>';

  return $nav;
}



/* fetching single post tags and adding a hastag infront  */

function trek_get_tags() {
  return get_the_tag_list('<div class="tags-list">#', ' #', '</div>');
}




/* adding html features  */
add_theme_support( 'html5', array( 'comment-list', 'commentform') );



//collecting the template for the comment section naviagtion
function trek_get_post_navigation() {

  if( get_comment_pages_count() > 1 && get_option('page_comments') ):

    require get_template_directory() . '/inc/template-parts/single-post/comments-navigation.php';


  endif;
}





function post_like_table_create() {

global $wpdb;
$table_name = $wpdb->prefix. "post_like_table";
global $charset_collate;
$charset_collate = $wpdb->get_charset_collate();
global $db_version;

if( $wpdb->get_var("SHOW TABLES LIKE '" . $table_name . "'") != $table_name)
{ $create_sql = "CREATE TABLE " . $table_name . " (
id INT(11) NOT NULL auto_increment,
postid INT(11) NOT NULL ,

clientip VARCHAR(40) NOT NULL ,

PRIMARY KEY (id))$charset_collate;";
require_once(ABSPATH . "wp-admin/includes/upgrade.php");
dbDelta( $create_sql );
}



//register the new table with the wpdb object
if (!isset($wpdb->post_like_table))
{
$wpdb->post_like_table = $table_name;
//add the shortcut so you can use $wpdb->stats
$wpdb->tables[] = str_replace($wpdb->prefix, '', $table_name);
}

}
add_action( 'init', 'post_like_table_create');

// Add the JS
function theme_name_scripts() {
wp_enqueue_script( 'script-name', get_template_directory_uri() . '/inc/template-parts/single-post/post-like/js/post-like.js', array('jquery'), '1.0.0', true );
wp_localize_script( 'script-name', 'MyAjax', array(
// URL to wp-admin/admin-ajax.php to process the request
'ajaxurl' => admin_url( 'admin-ajax.php' ),
// generate a nonce with a unique ID "myajax-post-comment-nonce"
// so that you can check it later when an AJAX request is sent
'security' => wp_create_nonce( 'my-special-string' )
));
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
// The function that handles the AJAX request

function get_client_ip() {
$ip=$_SERVER['REMOTE_ADDR'];
return $ip;
}

function my_action_callback() {
check_ajax_referer( 'my-special-string', 'security' );
$postid = intval( $_POST['postid'] );
$clientip=get_client_ip();
$like=0;
$dislike=0;
$like_count=0;
//check if post id and ip present
global $wpdb;
$row = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND clientip = '$clientip'");
if(empty($row)){
//insert row
$wpdb->insert( $wpdb->post_like_table, array( 'postid' => $postid, 'clientip' => $clientip ), array( '%d', '%s' ) );
//echo $wpdb->insert_id;
$like=1;
}
if(!empty($row)){
//delete row
$wpdb->delete( $wpdb->post_like_table, array( 'postid' => $postid, 'clientip'=> $clientip ), array( '%d','%s' ) );
$dislike=1;
}

//calculate like count from db.
$totalrow = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
$total_like=$wpdb->num_rows;
$data=array( 'postid'=>$postid,'likecount'=>$total_like,'clientip'=>$clientip,''=>$like,''=>$dislike);
echo json_encode($data);
//echo $clientip;
die(); // this is required to return a proper result
}
add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );
