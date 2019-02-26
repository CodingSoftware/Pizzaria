//Verifica se o documento foi carregado completamente, antes de executar o javascript
$(document).ready(function(){


//Escuta ações nos cards
  $(".list-group-item").click(function(){
//Remove clase active do objeto anterior
   $(".active").removeClass( "active" );
   $(".selecionartam").html("")
//Adiciona classe active no objeto selecionado
	  $(this).addClass("active");
      $(".active .selecionartam").html("  <input type='txt' name='acao' value='selecionartam'>")
//Adiciona atributo no botão salvar do card tamanho

      });


$(".removertam").click(function(){
    $(".card-selecionartam").html("<img class='rounded-circle' src='image/home/caixa.jpg'><p class='card-text'>Tamanho</p><button type='button' class='btn btn-primary selectTam'data-toggle='modal' data-target='#ModalTamanho'>Selecionar</button>")

})
//Escuta Ações no botao Salvar do card tamanho
$(".salvar-tam").click(function(){

  //Verifica se card esta ativo, se sim executa as ações abaixo
  if ($(".list-group-item").hasClass("active")) {



                   var form = new FormData($("#ajax_form")[0]);
                     $.ajax({
                       url:'_php/montedados.php',
                       type:'post',
                       datatype:'json',
                       cache:false,
                       processData:false,
                       contentType:false,
                       data:form,
                       success:function (resultado) {
                           $(".card-selecionartam").html(resultado)

                         }
               });

               $(".alert-tam").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> Ok, vamos escolher agora a borda.</div>');

             setTimeout(function () {
             $(".alert-tam").html("");
             $("#ModalTamanho").modal('hide')
           }, 1000);

  }
//se não
  else{
    //Mostra Alerta
    $(".alert-tam").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Escolha uma das opções para prosseguir.</div>');

setTimeout(function () {
  $(".alert-tam").html("");
}, 5000);
      }



	});









});








  $(document).ready(function(){

      $(".selectTam").click(function(){
        //Tamanho
          $.ajax({

            url:'_php/montedados.php',
            type:'get',
            cache:false,
            processData:true,
            contentType:false,
            data:{acao: "mostrartam"},
            timeout:8000,
            success:function (resultado) {
              //exibe o conteudo no select
                $("#ajax_form").html(resultado + '<script src="js/script.js"></script>');


            }

      })



      });





        });
