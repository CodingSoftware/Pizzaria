$(document).ready(function(){
    setTimeout(function () {


    $("#selecttam").load("_php/mostprod.php");
  }, 1);

  $("#salvartam").click(function(){


  $("#selecttam").load("_php/mostprod.php");
});

});
