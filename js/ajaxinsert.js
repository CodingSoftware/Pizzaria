
$(document).ready(function(){


$("#salvartam").click(function(){
 console.log("aqui esta ativo");
  var campo1 = $("#tam1").val();
  var campo2 = $("#tam2").val();
  var campo3 = $("#tam3").val();
  var campo4 = $("#tam4").val();


if (campo1=="" || campo2=="" || campo3=="" || campo4=="") {

 $(".alert-tam").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Preencha todos os campos.</div>');
setTimeout(function(){$(".alert-tam").html("");}, 5000);

}else {


  var form = new FormData($("#formulariotam")[0]);

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

$("#tam1").val("");
$("#tam2").val("");
$("#tam3").val("");
$("#tam4").val("");
}

})


})




$(document).ready(function(){




$("#salvarbord").click(function(){

  var campo1 = $("#bord1").val();
  var campo2 = $("#bord2").val();


if (campo1=="" || campo2=="") {
 $(".alert-bord").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Preencha todos os campos.</div>');
setTimeout(function(){$(".alert-bord").html("");}, 5000);

}else {


  var formbord = new FormData($("#formulariobord")[0]);

    $.ajax({
      url:'_php/cadprod.php',
      type:'post',
      datatype:'json',
      cache:false,
      processData:false,
      contentType:false,
      data:formbord,
      timeout:8000,
      success:function (resultado) {

	 $(".alert-bord").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a>Dados Inseridos com Sucesso!</div>');
      setTimeout(function(){$(".alert-bord").html("");}, 2000);
      }


    })

$("#bord1").val("");
$("#bord2").val("");

}

})
})
