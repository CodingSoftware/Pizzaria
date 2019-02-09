
$(document).ready(function(){


$("#salvartam").click(function(){

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

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "mostrartam"},
              timeout:8000,
              success:function (resultado) {
                //exibe o conteudo no select
                  $("#selecttam").html(resultado);

              }

            });
            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletartam"},
              timeout:8000,
              success:function (resultado) {
                  //exibe o conteudo no div
                  $("#divtam").html(resultado);

              }

            });
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

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "mostrarbord"},
              timeout:8000,
              success:function (resultado) {
                //exibe o conteudo no select
                  $("#selectbord").html(resultado);

              }

            });
            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarbord"},
              timeout:8000,
              success:function (resultado) {
                  //exibe o conteudo no div
                  $("#divbord").html(resultado);

              }

            });


	 $(".alert-bord").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a>Dados Inseridos com Sucesso!</div>');
      setTimeout(function(){$(".alert-bord").html("");}, 2000);
      }


    })

$("#bord1").val("");
$("#bord2").val("");

}

})
})












$(document).ready(function(){




$("#salvarsabor").click(function(){

  var campo1 = $("#sabor1").val();
  var campo2 = $("#sabor2").val();


if (campo1=="" || campo2=="") {
 $(".alert-sabor").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Preencha todos os campos.</div>');
setTimeout(function(){$(".alert-sabor").html("");}, 5000);

}else {


  var formsabor = new FormData($("#formulariosabor")[0]);

    $.ajax({
      url:'_php/cadprod.php',
      type:'post',
      datatype:'json',
      cache:false,
      processData:false,
      contentType:false,
      data:formsabor,
      timeout:8000,
      success:function (resultado) {

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "mostrarsabor"},
              timeout:8000,
              success:function (resultado) {
                //exibe o conteudo no select
                  $("#selectsabor").html(resultado);

              }

            });
            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarsabor"},
              timeout:8000,
              success:function (resultado) {
                  //exibe o conteudo no div
                  $("#divsabor").html(resultado);

              }

            });


	 $(".alert-sabor").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a>Dados Inseridos com Sucesso!</div>');
      setTimeout(function(){$(".alert-sabor").html("");}, 2000);
      }


    })

$("#sabor1").val("");
$("#sabor2").val("");

}

})
})







$(document).ready(function(){




$("#salvarbebida").click(function(){

  var campo1 = $("#bebida1").val();
  var campo2 = $("#bebida2").val();


if (campo1=="" || campo2=="") {
 $(".alert-bebida").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Preencha todos os campos.</div>');
setTimeout(function(){$(".alert-bebida").html("");}, 5000);

}else {


  var formbebida = new FormData($("#formulariobebida")[0]);

    $.ajax({
      url:'_php/cadprod.php',
      type:'post',
      datatype:'json',
      cache:false,
      processData:false,
      contentType:false,
      data:formbebida,
      timeout:8000,
      success:function (resultado) {

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "mostrarbebida"},
              timeout:8000,
              success:function (resultado) {
                //exibe o conteudo no select
                  $("#selectbebida").html(resultado);

              }

            });
            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarbebida"},
              timeout:8000,
              success:function (resultado) {
                  //exibe o conteudo no div
                  $("#divbebida").html(resultado);

              }

            });


	 $(".alert-bebida").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a>Dados Inseridos com Sucesso!</div>');
      setTimeout(function(){$(".alert-bebida").html("");}, 2000);
      }


    })

$("#bebida1").val("");
$("#bebida2").val("");

}

})
})



$(document).ready(function(){




$("#salvarentrega").click(function(){

  var campo1 = $("#entrega1").val();


if (campo1=="") {
 $(".alert-entrega").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Preencha todos os campos.</div>');
setTimeout(function(){$(".alert-entrega").html("");}, 5000);

}else {


  var formentrega = new FormData($("#formularioentrega")[0]);

    $.ajax({
      url:'_php/cadprod.php',
      type:'post',
      datatype:'json',
      cache:false,
      processData:false,
      contentType:false,
      data:formentrega,
      timeout:8000,
      success:function (resultado) {

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "mostrarentrega"},
              timeout:8000,
              success:function (resultado) {
                //exibe o conteudo no select
                  $("#selectentrega").html(resultado);

              }

            });
            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarentrega"},
              timeout:8000,
              success:function (resultado) {
                  //exibe o conteudo no div
                  $("#diventrega").html(resultado);

              }

            });


	 $(".alert-entrega").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a>Dados Inseridos com Sucesso!</div>');
      setTimeout(function(){$(".alert-entrega").html("");}, 2000);
      }


    })

$("#entrega1").val("");

}

})
})
