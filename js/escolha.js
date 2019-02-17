$(document).ready(function(){
$("#escolher").click(function(){

$.ajax({
  url:'_php/monte.php',
  type:'get',
  cache:false,
  processData:true,
  contentType:false,
  data:{ modal: "tamanho", escolha:"Pequena"},
  timeout:8000,
  success:function (resultado) {
    //exibe o conteudo no select
    var obj = JSON.parse(resultado);
  $("#par1").html(obj.id);
  $("#par2").html(obj.tamanho);
  $("#par3").html(obj.valor);

  }

});

});

});
