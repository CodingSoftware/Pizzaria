$(document).ready(function(){
  //Escuta o click do botão
  $("#salvartam").click(function(){
  //Determina que apos click,a div com o id especificado recebera conteudo escolhido.
  $("#selecttam").load("_php/mostprod.php option");
});
  //Determina que apenas uma vez e no 1° milesimo de segundo,a div com o id especificado recebera conteudo escolhido.
  setTimeout(function () {
  $("#selecttam").load("_php/mostprod.php option");
}, 1);

});


$(document).ready(function(){
  //Escuta o click do botão
  $("#salvartam").click(function(){
  //Determina que apos click,a div com o id especificado recebera conteudo escolhido.
  $("#divtam").load("_php/mostprod.php div");
  });
  //Determina que apenas uma vez e no 1° milesimo de segundo,a div com o id especificado recebera conteudo escolhido.
  setTimeout(function () {
  $("#divtam").load("_php/mostprod.php div");
  }, 1);

});



$(document).ready(function(){
    $.ajax({
      url:'_php/cadprod.php',
      type:'get',
      cache:false,
      processData:false,
      contentType:false,
      data:{ name: "John"},
      timeout:8000,
      success:function (resultado) {
          $("#resposta").html(resultado);

      }

    })
  });
