
$(document).ready(function(){


$("#salvartam").click(function(){

  var campo1 = $("#1").val();
  var campo2 = $("#2").val();
  var campo3 = $("#3").val();
  var campo4 = $("#4").val();


if (campo1=="" || campo2=="" || campo3=="" || campo4=="") {
	
 $(".alert-tam").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Preencha todos os campos.</div>');
setTimeout(function(){$(".alert-tam").html("");}, 5000);

}else {


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
     
	 $(".alert-tam").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a>Dados Inseridos com Sucesso!</div>');
      setTimeout(function(){$(".alert-tam").html("");}, 2000);
      }


    })

$("#1").val("");
$("#2").val("");
$("#3").val("");
$("#4").val("");
}

})




})
