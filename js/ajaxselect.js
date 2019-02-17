$(document).ready(function(){

  //Tamanho
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

  $("#deletetamanho").click(function(){
    $.ajax({
      url:'_php/mostprod.php',
      type:'get',
      cache:false,
      processData:true,
      contentType:false,
      data:{ acao: "deletartam"},
      timeout:8000,
      success:function (resultado) {

          $("#divtam").html(resultado);

      }
      });
          });




      //Borda

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

      $("#deleteborda").click(function(){
    $.ajax({
      url:'_php/mostprod.php',
      type:'get',
      cache:false,
      processData:true,
      contentType:false,
      data:{ acao: "deletarbord"},
      timeout:8000,
      success:function (resultado) {
          $("#divbord").html(resultado);

      }

    });
  })
    //Sabor
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

      $("#deletesabor").click(function(){
  $.ajax({
    url:'_php/mostprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ acao: "deletarsabor"},
    timeout:8000,
    success:function (resultado) {
        $("#divsabor").html(resultado);

    }

  });
});

  //Bebida
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
  $("#deletebebida").click(function(){
$.ajax({
  url:'_php/mostprod.php',
  type:'get',
  cache:false,
  processData:true,
  contentType:false,
  data:{ acao: "deletarbebida"},
  timeout:8000,
  success:function (resultado) {
      $("#divbebida").html(resultado);

  }

});
});

  //Entrega
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

    $("#deleteentrega").click(function(){
$.ajax({
  url:'_php/mostprod.php',
  type:'get',
  cache:false,
  processData:true,
  contentType:false,
  data:{ acao: "deletarentrega"},
  timeout:8000,
  success:function (resultado) {
      $("#diventrega").html(resultado);

  }

});

});

});

$(document).ready(function(){

$(".pago").click(function(){
$(".valor").removeClass("esconde");
$("input#entrega1").removeAttr("Value","0");
});

$(".gratis").click(function(){
$("div.valor").addClass("esconde");
$("input#entrega1").attr("Value","0");
});

});
