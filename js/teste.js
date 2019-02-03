$(document).ready(function(){
  //Escuta o click do botão
  $("#salvartam").click(function(){
    $.ajax({
      url:'_php/mostprod.php',
      type:'get',
      cache:false,
      processData:true,
      contentType:false,
      data:{ acao: "mostrar"},
      timeout:8000,
      success:function (resultado) {
          $("#selecttam").html(resultado);

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
      data:{ acao: "mostrar"},
      timeout:8000,
      success:function (resultado) {
          $("#selecttam").html(resultado);

      }

    })

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
      data:{ acao: "deletar"},
      timeout:8000,
      success:function (resultado) {
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
      data:{ acao: "deletar"},
      timeout:8000,
      success:function (resultado) {
          $("#divtam").html(resultado);

      }

    })

  }, 1);

});



$(document).ready(function(){

  });
