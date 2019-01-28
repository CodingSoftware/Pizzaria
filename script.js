//Verifica se o documento foi carregado completamente, antes de executar o javascript
$(document).ready(function(){


//Escuta ações nos cards
  $(".list-group-item").click(function(){
//Remove clase active do objeto anterior
   $(".active").removeClass( "active" );
//Adiciona classe active no objeto selecionado
	  $(this).addClass("active");
//Adiciona atributo no botão salvar do card tamanho
    
      });


                                                    
//Escuta Ações no botao Salvar do card tamanho
$(".salvar-tam").click(function(){
  //Verifica se card esta ativo, se sim executa as ações abaixo
  if ($(".list-group-item").hasClass("active")) {  
    //variavel sel recebe card ativo
	var seltam = $(".active").html();
  //classe novo recebe conteudo da variavel sel
  $(".selecionado-tam").html(seltam);
  //Classe botao recebe conteudo html pré-definido
  $(".botao-tam").html('<button type="button" onclick="executartam()" class="btn btn-danger del"><i class="far fa-trash-alt"></i></button>');
     //Remove classe active ao salvar
     $(".active").removeClass( "active" );

      $(".modal").modal('hide');

  } 
//se não
  else{
    //Mostra Alerta
    $(".alert-tam").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Escolha uma das opções para prosseguir.</div>');
      }
	});


//Escuta Ações no botao Salvar do card Borda
$(".salvar-bord").click(function(){
  //Verifica se card esta ativo, se sim executa as ações abaixo
  if ($(".list-group-item").hasClass("active")) {  
    //variavel sel recebe card ativo
	var selbord = $(".active").html();
  //classe novo recebe conteudo da variavel sel
  $(".selecionado-bord").html(selbord);
  //Classe botao recebe conteudo html pré-definido
  $(".botao-bord").html('<button type="button" onclick="executarbord()" class="btn btn-danger del"><i class="far fa-trash-alt"></i></button>');
     //Remove classe active ao salvar
     $(".active").removeClass( "active" );

      $(".modal").modal('hide');

  } 
//se não
  else{
    //Mostra Alerta
    $(".alert-bord").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Escolha uma das opções para prosseguir.</div>');
      }
	});

  //Escuta Ações no botao Salvar do card tipo
$(".salvar-tipo").click(function(){
  //Verifica se card esta ativo, se sim executa as ações abaixo
  if ($(".list-group-item").hasClass("active")) {  
    //variavel seltipo recebe card ativo
	var seltipo = $(".active").html();
  //classe selecionado recebe conteudo da variavel seltipo
  $(".selecionado-tipo").html(seltipo);
  //Classe botao recebe conteudo html pré-definido
  $(".botao-tipo").html('<button type="button" onclick="executartipo()" class="btn btn-danger del"><i class="far fa-trash-alt"></i></button>');
     //Remove classe active ao salvar
     $(".active").removeClass( "active" );

      $(".modal").modal('hide');

  } 
//se não
  else{
    //Mostra Alerta
    $(".alert-tipo").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Escolha uma das opções para prosseguir.</div>');
      }
	});

//Escuta Ações no botao Salvar do card tipo
$(".salvar-pagamento").click(function(){
  //Verifica se card esta ativo, se sim executa as ações abaixo
  if ($(".list-group-item").hasClass("active")) {  
    //variavel seltipo recebe card ativo
	var seltipo = $(".active").html();
  //classe selecionado recebe conteudo da variavel seltipo
  $(".selecionado-pagamento").html(seltipo);
  //Classe botao recebe conteudo html pré-definido
  $(".botao-pagamento").html('<button type="button" onclick="executarpagamento()" class="btn btn-danger del"><i class="far fa-trash-alt"></i></button>');
     //Remove classe active ao salvar
     $(".active").removeClass( "active" );

      $(".modal").modal('hide');

  } 
//se não
  else{
    //Mostra Alerta
    $(".alert-pagamento").html(
'<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert"aria-label="close">&times;</a> <strong>Atenção!</strong> Escolha uma das opções para prosseguir.</div>');
      }
	});












});




 

//card tamanho volta ao conteudo anterior
   var anttam = $(".anterior-tam").html();
   function executartam(){
   $(".anterior-tam").html(anttam);
   
  };
    
//card borda volta ao conteudo anterior
   var antbord = $(".anterior-bord").html();
   function executarbord(){
   $(".anterior-bord").html(antbord);
   
  };

//card tipo volta ao conteudo anterior
   var anttipo = $(".anterior-tipo").html();
   function executartipo(){
   $(".anterior-tipo").html(anttipo);
   
  };


//card pagamento volta ao conteudo anterior
   var antpagamento = $(".anterior-pagamento").html();
   function executarpagamento(){
   $(".anterior-pagamento").html(antpagamento);
   
  };
