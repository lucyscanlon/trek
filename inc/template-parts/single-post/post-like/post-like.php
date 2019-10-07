<?php
global $wpdb;
$l=0;
$postid=get_the_id();
$clientip=get_client_ip();
$row1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid' AND clientip = '$clientip'");
if(!empty($row1)){
$l=1;
}
$totalrow1 = $wpdb->get_results( "SELECT id FROM $wpdb->post_like_table WHERE postid = '$postid'");
$total_like1 = $wpdb->num_rows;
?>

<style>
a.pp_like i {
font-size: 18px;
color: black;
}

a.pp_like i:hover {
  color: <?php echo get_theme_mod('blog_page_link_hover_color'); ?>
}
a.pp_like {
text-decoration: none;
box-shadow: none;
}

.lds-facebook {
display: inline-block;
position: relative;
width: 64px;
height: 38px;
display:none;
margin-top: -20px;
}
.lds-facebook div {
display: inline-block;
position: absolute;
left: 6px;
width: 13px;
background: #007acc;
}
.lds-facebook div:nth-child(1) {
left: 0px;
animation-delay: -0.24s;
}
.lds-facebook div:nth-child(2) {
left: 22px;
animation-delay: -0.12s;
}
.lds-facebook div:nth-child(3) {
left: 45px;
animation-delay: 0;
}
@keyframes lds-facebook {
0% {
top: 6px;
height: 51px;
}
50%, 100% {
top: 19px;
height: 26px;
}
}
</style>


<div class="post_like">
<a class="pp_like <?php if($l==1) {echo "liked"; } ?>" href="#" data-id="<?php echo get_the_id(); ?>"><i class="fas fa-heart"></i></i> <span><?php echo $total_like1; ?></span></a>
<div class="lds-facebook"><div></div><div></div><div></div></div>
</div>
