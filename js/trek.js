jQuery( document ).ready(function() {
  $("#searchbutton").click(function(){
  $("#opensearch").addClass("is_active");
});

  $("#closesearch").click(function(){
  $("#opensearch").removeClass("is_active");
});

  $("#SmallScreenMenuOpen").click(function(){
    $("#smallmenu").addClass("smallmenuisopen");
    $("#whole-body").addClass("fixedposition");
  });

  $("#crossclosebutton").click(function(){
    $("#smallmenu").removeClass("smallmenuisopen");
    $("#whole-body").removeClass("fixedposition");
  });






});
