jQuery( document ).ready(function() {
  /* When the search icon is clicked, open the search overlay */
  $("#searchbutton").click(function(){
  $("#opensearch").addClass("is_active");
});

$("#searchicon").click(function(){
$("#opensearch").addClass("is_active");
});

  /* When the close icon is clicked, close the search overlay */
  $("#closesearch").click(function(){
  $("#opensearch").removeClass("is_active");
});

  /* When the menu icon is clicked, open the mobile menu */
  $("#SmallScreenMenuOpen").click(function(){
    $("#smallmenu").addClass("smallmenuisopen");
    $("#whole-body").addClass("fixedposition");
  });

  /* When the menu close icon is clicked, close the mobile menu */
  $("#crossclosebutton").click(function(){
    $("#smallmenu").removeClass("smallmenuisopen");
    $("#whole-body").removeClass("fixedposition");
  });

});
