$(document).ready(function(){
  //Escuta o click do botão
  $("#salvartam").click(function(){
    //Faz requisição ajax afim de condicionar o conteudo exibido
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

    })



});
  //excuta acao em determinado intervalo de tempo
  setTimeout(function () {
      //Faz requisição ajax afim de condicionar o conteudo exibido
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

    })
//intervalo de tempo
}, 1);

});


$(document).ready(function(){
  //Escuta o click do botão
  $("#salvartam").click(function(){
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

    })
  //Determina que apos click,a div com o id especificado recebera conteudo escolhido.

  });
  //Determina que apenas uma vez e no 1° milesimo de segundo,a div com o id especificado recebera conteudo escolhido.
  setTimeout(function () {
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

    })
//intervalo de tempo
  }, 1);

});
