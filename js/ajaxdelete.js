
$(document).ready(function(){

$(".removetam").click(function(){

  var id = $(this).prop("id");

  $.ajax({
    url:'_php/delprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ id: id, acao:"deletartam"},
    success:function (resultado) {

        $("#recebetam").html(resultado);

              $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletartam"},
              success:function (resultado) {
                  $("#divtam").html(resultado);
                    }

            });

            $.ajax({
            url:'_php/mostprod.php',
            type:'get',
            cache:false,
            processData:true,
            contentType:false,
            data:{ acao: "mostrartam"},
            success:function (resultado) {
              //exibe o conteudo no select
                $("#selecttam").html(resultado);

            }

          })

    }

  });

});

$(".removebord").click(function(){

  var id = $(this).prop("id");

    $.ajax({
    url:'_php/delprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ id: id, acao:"deletarbord"},
    timeout:1000,
    success:function (resultado) {

        $("#recebebord").html(resultado);

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarbord"},
              timeout:1000,
              success:function (resultado) {
                  $("#divbord").html(resultado);

              }

            });

            $.ajax({
            url:'_php/mostprod.php',
            type:'get',
            cache:false,
            processData:true,
            contentType:false,
            data:{ acao: "mostrarbord"},
            timeout:1000,
            success:function (resultado) {
              //exibe o conteudo no select
                $("#selectbord").html(resultado);

            }

          });





    }

  });



});



$(".removesabor").click(function(){

  var id = $(this).prop("id");

    $.ajax({
    url:'_php/delprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ id: id, acao:"deletarsabor"},
    timeout:1000,
    success:function (resultado) {

        $("#recebesabor").html(resultado);

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarsabor"},
              timeout:1000,
              success:function (resultado) {
                  $("#divsabor").html(resultado);

              }

            });

            $.ajax({
            url:'_php/mostprod.php',
            type:'get',
            cache:false,
            processData:true,
            contentType:false,
            data:{ acao: "mostrarsabor"},
            timeout:1000,
            success:function (resultado) {
              //exibe o conteudo no select
                $("#selectsabor").html(resultado);

            }

          });





    }

  });



});




$(".removebebida").click(function(){

  var id = $(this).prop("id");

    $.ajax({
    url:'_php/delprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ id: id, acao:"deletarbebida"},
    timeout:1000,
    success:function (resultado) {

        $("#recebebebida").html(resultado);

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarbebida"},
              timeout:1000,
              success:function (resultado) {
                  $("#divbebida").html(resultado);

              }

            });

            $.ajax({
            url:'_php/mostprod.php',
            type:'get',
            cache:false,
            processData:true,
            contentType:false,
            data:{ acao: "mostrarbebida"},
            timeout:1000,
            success:function (resultado) {
              //exibe o conteudo no select
                $("#selectbebida").html(resultado);

            }

          });





    }

  });



});






$(".removeentrega").click(function(){

  var id = $(this).prop("id");

    $.ajax({
    url:'_php/delprod.php',
    type:'get',
    cache:false,
    processData:true,
    contentType:false,
    data:{ id: id, acao:"deletarentrega"},
    timeout:1000,
    success:function (resultado) {

        $("#recebeentrega").html(resultado);

            $.ajax({
              url:'_php/mostprod.php',
              type:'get',
              cache:false,
              processData:true,
              contentType:false,
              data:{ acao: "deletarentrega"},
              timeout:1000,
              success:function (resultado) {
                  $("#diventrega").html(resultado);

              }

            });

            $.ajax({
            url:'_php/mostprod.php',
            type:'get',
            cache:false,
            processData:true,
            contentType:false,
            data:{ acao: "mostrarentrega"},
            timeout:1000,
            success:function (resultado) {
              //exibe o conteudo no select
                $("#selectentrega").html(resultado);

            }

          });





    }

  });



});


});
