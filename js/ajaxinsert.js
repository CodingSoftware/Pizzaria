
$(document).ready(function(){


$("#salvartam").click(function(){

  var form = new FormData($("#formulario")[0]);

    $.ajax({
      url:'_php/cadprod.php',
      type:'post',
      datatype:'json',
      cache:false,
      processData:false,
      contentType:false,
      data:form,
      timeout:8000,
      success:function (resultado) {
        

      }
	  
	  
    })

$("#1").val("");
$("#2").val("");
$("#3").val("");
$("#4").val("");

})




})
