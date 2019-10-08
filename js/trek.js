jQuery( document ).ready(function() {
  $("#searchbutton").click(function(){
  $("#opensearch").addClass("is_active");
});

  $("#closesearch").click(function(){
  $("#opensearch").removeClass("is_active");
});

});
