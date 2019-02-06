
$(document).ready(function(){

$(".lixo").click(function(){

  var id = $(this).prop("id");

  $.ajax({
    url:'_php/delprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ id: id},
    timeout:1000,
    success:function (resultado) {

        $("#recebe").html(resultado);

    }

  })


  setTimeout(function () {
    $.ajax({
      url:'_php/mostprod.php',
      type:'get',
      cache:false,
      processData:true,
      contentType:false,
      data:{ acao: "deletar"},
      timeout:1000,
      success:function (resultado) {
          $("#divtam").html(resultado);

      }

    })
  //intervalo de tempo
}, 5000);






})


})
