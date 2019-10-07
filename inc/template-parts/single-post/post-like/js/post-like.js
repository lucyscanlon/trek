jQuery(document).ready(function($) {


jQuery('.pp_like').click(function(e){
e.preventDefault();
jQuery('.pp_like').hide();
jQuery('.lds-facebook').show();
var postid=jQuery(this).data('id');
//alert(postid);
var data = {
action: 'my_action',
security : MyAjax.security,
postid: postid
};
jQuery.post(MyAjax.ajaxurl, data, function(res) {
var result=jQuery.parseJSON( res );
console.log(result);
//alert(res);
var likes="";
likes=result.likecount + "";
jQuery('.pp_like span').text(likes);
if(result.like ==1){
jQuery('.pp_like').addClass('liked');
}
if(result.dislike ==1){
jQuery('.pp_like').removeClass('liked');
}
jQuery('.pp_like').show();
jQuery('.lds-facebook').hide();
});
});


});
