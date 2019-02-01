<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monte sua Pizza</title>



  </head>

  <body>
<?php require_once('_php/variaveis.php'); ?>
<?php require_once('header.php'); ?>

</nav>
	<header><h4 class="lead text-center"> Monte sua <strong>Pizza</strong>,qualquer duvida entre em contato conosco.</h4></header>
  <!-- Seção Modal -->
<!-- Tamanho -->
<div class="modal fade " id="ModalTamanho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Escolha o Tamanho</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<!-- conteudo do modal -->

<div class="list-group">
<form method="post" action="" id="ajax_form">
<input type="radio" name="t" value="1" id="f" checked>
<label for="f">
<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/tamanho/f.png"
width="80px" height="80px">
<p class="card-text">Familia</p>

<p><strong> <?php echo "R$ ".number_format($f,2,",",".")?> </strong></p>



</div>
</div>

</label>

<input type="radio" name="t" value="2" id="g">
<label for="g">
<div class="list-group-item card bg-light">

<div class="card-body text-center">
<img class="rounded-circle" src="image/tamanho/g.png"
width="80px" height="80px">
<p class="card-text">Grande</p>
<p><strong><?php echo "R$ ".number_format($g,2,",",".")?></strong></p>
</div>
</div>
</label>
<input type="radio" name="t" value="3" id="m" checked>
<label for="m">
<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/tamanho/g.png"
width="80px" height="80px">
<p class="card-text">Média</p>
<p><strong><?php echo "R$ ".number_format($m,2,",",".")?></strong></p>
</div>
</div>
</label>
<input type="radio" name="t" value="4" id="p" checked>
<label for="p">
<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/tamanho/g.png"
width="80px" height="80px">
<p class="card-text">Pequena</p>
<p><strong><?php echo "R$ ".number_format ($p,2,",",".")?></strong></p>
</div>
</div>
</div>


<div class="alert-tam"></div>
<div class="modal-footer">


<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
<input type="submit" value="Salvar" class="btn btn-success salvar-tam">
</form>
</div>
</div>
</div>
</div>
</div>

<!-- Borda -->
<div class="modal fade " id="ModalBorda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Escolha a Borda</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="list-group">

<form method="post" action="">
<input type="radio" name="b" value="1" id="n" checked>
<label for="n">
<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/borda/normal.jpg">
<p class="card-text">Normal</p>
<p><strong><?php echo "R$ ".number_format ($n,2,",",".") ?></strong></p>
</div>
</div>
</label>

<input type="radio" name="b" value="2" id="r" checked>
<label for="r">

<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/borda/recheada.jpg">
<p class="card-text">Recheada</p>
<p><strong><?php echo "R$ ".number_format ($r,2,",",".") ?></strong></p>
</div>
</div>
</label>

</div>

<div class="alert-bord"></div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<input type="submit" value="Salvar" class="btn btn-success salvar-bord">
</form>
</div>
</div>
</div>
</div>
</div>
<!-- Tipo -->
<div class="modal fade" id="ModalTipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Escolha o Tipo</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="list-group">
<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/tipo/doce.jpg">
<p class="card-text">Doce</p>
<p><strong>R$ 0,00</strong></p>
</div>
</div>

<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/tipo/salgado.png">
<p class="card-text">Salgado</p>
<p><strong>R$ 0,00</strong></p>
</div>
</div>
</div>
<div class="alert-tipo"></div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-success salvar-tipo">Salvar</button>
</div>
</div>
</div>
</div>
</div>
<!-- Sabor -->
<div class="modal fade" id="ModalSabor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Escolha o Sabor</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
...
</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-success">Save changes</button>
</div>
</div>
</div>
</div>

<!-- Pagamento -->
<div class="modal fade" id="ModalPagamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Escolha a Forma de pagamento</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="list-group">
<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/pagamento/cartao.jpeg">
<p class="card-text">Cartão</p>

</div>
</div>

<div class="list-group-item card bg-light">
<div class="card-body text-center">
<img class="rounded-circle" src="image/pagamento/dinheiro.jpg">
<p class="card-text">Dinheiro</p>

</div>
</div>
</div>
<div class="alert-pagamento"></div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-success salvar-pagamento">Salvar</button>
</div>
</div>
</div>
</div>
</div>

<!-- Tipo -->
<div class="modal fade" id="Modalpizza" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Meu Carrinho (1)</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body modal-pagamento">
<div class="list-group">

<div class="card-pagamento card-body text-center">
<table class="table table-bordered">

<tbody>
<tr>
<td> <img class="rounded-circle" src="image/tipo/salgado.png"></td>
<td> <h6 class="descricao">Tamanho: <b>Fámilia</b>, Sabor: <b>Frango</b>, Borda: <b>Recheada</b>, Sabor: <b>Frango</b>, Borda: <b>Recheada</b>.</h6> <h5 class="valortotal"><strong>R$ 20,00</strong></h5></td>

<tr><td colspan="2" class="icon-full">
<small >Quantidade:</small>
<input class="form-control text-center" type="number" value="1" id="example-number-input">
<button type="button" class="btn btn-danger remover"><i class="far fa-trash-alt"></i></button>


<br> <br>

</td></tr></tr>


</tbody>
</table>

<br><br>
<h6 class="endereco"> Endereço: <b>Rua Vereador João Silva</b></h6>
<h6 class="nome">Nome: <b>Matheus Barreto Andrade</b></h6>
</div>
</div>


</div>
<div class="alert-tipo"></div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary reiniciar-pizza" data-dismiss="modal">Continuar Montando</button>
<button type="button" class="btn btn-success salvar-pizza">Fazer pedido</button>
</div>
</div>
</div>
</div>

	<div class="container" id="monte">

    			<div class="card bg-light">
          <?php

          $t=$_POST['t'];



      if($t==0){
						echo	"<div class='card-body mt text-center'>
        					<img class='rounded-circle' src='image/home/caixa.jpg'>
        					<p class='card-text'>Tamanho</p>
                  <button type='button' class='btn btn-primary'
                  data-toggle='modal' data-target='#ModalTamanho'>
                  Selecionar</button></div>";
}else{
switch ($t) {
    case '1':
     $t=$f;
      echo"<div class='card-body text-center'>
           <form method='post' action='monte-sua-pizza.php'>
           <img class='rounded-circle' src='image/tamanho/f.png'
           width='80px' height='80px'>
           <p class='card-text'>Família</p><p><strong>"."R$ ".number_format($f,2,",",".")."</strong></p>
           <input type='submit' value='Remover'
           class='btn btn-danger del'>
           <input type='radio' name='t' value='0'></div>
           </form>";

   break;

    case '2':
    $t=$g;
     echo"<div class='card-body text-center'>
          <form method='post' action='monte-sua-pizza.php'>
          <img class='rounded-circle' src='image/tamanho/g.png'
          width='80px' height='80px'>
          <p class='card-text'>Grande</p><p><strong>"."R$ ".number_format($g,2,",",".")."</strong></p>
          <input type='submit' value='Remover'
          class='btn btn-danger del'>
          <input type='radio' name='t' value='0'></div>
          </form>";

    break;

    case '3':
    $t=$m;
     echo"<div class='card-body text-center'>
          <form method='post' action='monte-sua-pizza.php'>
          <img class='rounded-circle' src='image/tamanho/g.png'
          width='80px' height='80px'>
          <p class='card-text'>Media</p><p><strong>"."R$ ".number_format($m,2,",",".")."</strong></p>
          <input type='submit' value='Remover'
          class='btn btn-danger del'>
          <input type='radio' name='t' value='0'></div>
          </form>";

    break;

      case '4':
      $t=$p;
       echo"<div class='card-body text-center'>
            <form method='post' action='monte-sua-pizza.php'>
            <img class='rounded-circle' src='image/tamanho/g.png'
            width='80px' height='80px'>
            <p class='card-text'>Pequena</p><p><strong>"."R$ ".number_format($p,2,",",".")."</strong></p>
            <input type='submit' value='Remover'
            class='btn btn-danger del'>
            <input type='radio' name='t' value='0'></div>
            </form>";

      break;
}

}
?>


      		</div>







					<div class="card bg-light">

			<?php
          $b=$_POST['b'];
      if($b==0){
						echo	"<div class='card-body mt text-center'>
        					<img class='rounded-circle' src='image/home/borda.png'>
        					<p class='card-text'>Borda</p>
                  <button type='button' class='btn btn-primary'
                  data-toggle='modal' data-target='#ModalBorda'>
                  Selecionar</button></div>";
}else{
switch ($b) {
    case '1':
     $b=$n;
      echo"<div class='card-body text-center'>
           <form method='post' action='monte-sua-pizza.php'>
           <img class='rounded-circle' src='image/borda/normal.jpg'
           width='80px' height='80px'>
           <p class='card-text'>Normal</p><p><strong>"."R$ ".number_format($n,2,",",".")."</strong></p>
           <input type='submit' value='Remover'
           class='btn btn-danger del'>
           <input type='radio' name='b' value='0'></div>
           </form>";

   break;

    case '2':
    $b=$r;
     echo"<div class='card-body text-center'>
          <form method='post' action='monte-sua-pizza.php'>
          <img class='rounded-circle' src='image/borda/recheada.jpg'
          width='80px' height='80px'>
          <p class='card-text'>Recheada</p><p><strong>"."R$ ".number_format($r,2,",",".")."</strong></p>
          <input type='submit' value='Remover'
          class='btn btn-danger del'>
          <input type='radio' name='b' value='0'></div>
          </form>";

    break;


}

}
?>

					  </div>
					<div class="card bg-light">
            <div class="anterior-tipo">
      			<div class="selecionado-tipo">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/home/tipo.png">
        					<p class="card-text">Tipo</p>
										<!-- Botão Modal Tipo -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTipo">
  Selecionar
</button>
      				</div>
      			</div>
 <div class="botao botao-tipo">
            </div>
            </div>
    	      	 </div>

					<div class="card bg-light">
            <div class="anterior-sabor">
      			<div class="selecionado-sabor">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/home/doceesalgado.png">
        					<p class="card-text">Sabor</p>
										<!-- Botão Modal Sabor -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSabor">
  Selecionar
</button>
      					</div>
      			</div>
 <div class="botao botao-sabor">
            </div>
            </div>
    	      	 </div>
					<div class="card bg-light">
            <div class="anterior-pagamento">
      			<div class="selecionado-pagamento">
      				<div class="card-body text-center">
        					<img class="rounded" src="image/home/pagamento.png">
        					<p class="card-text">Pagamento</p>
										<!-- Botão Modal Pagamento -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalPagamento">
  Selecionar
</button>
      				</div>
      			</div>
 <div class="botao botao-pagamento">
            </div>
            </div>
          </div>
            <div class="card bg-light">


                <div class="card-body mt text-center">
                    <img class="rounded-circle" src="image/valor/valor.png" width="80px" height="80px">
                    <p class="card-text">Valor Total</p>
					  <p class="card-text"><strong><?php $vt=$t+$b; echo"R$ ".number_format ($vt,2,",",".")?> </strong></p>
                    <!-- Botão Modal Tamanho -->


            <button type="button" class="btn btn-primary valor1" data-toggle="modal" data-target="#Modalpizza">
            Ver Pizza
            </button>
            <button type="button" class="btn btn-primary valor2">
            Fazer Pedido
            </button>

            </div>

            </div>
	           </div>




    <script src="js/script.js"></script>
