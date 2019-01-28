<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Monte sua Pizza</title>



  </head>

  <body>
<?php require_once('_php/variaveis.php'); ?>
<?php require_once('_php/header.php'); ?>
	<header><h4 class="text-center text-black"> Monte Sua Pizza</h4></header>
	<div class="container" id="monte">

    			<div class="card bg-light">
            <div class="anterior-tam">
      			<div class="selecionado-tam">
							<div class="card-body mt text-center">
        					<img class="rounded-circle" src="image/home/caixa.jpg">
        					<p class="card-text">Tamanho</p>
									<!-- Botão Modal Tamanho -->


<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalTamanho">
  Selecionar
</button>
</div>

      				</div>

              <div class="botao botao-tam">

              </div>


              </div>
    	 	 </div>


					<div class="card bg-light">
               <div class="anterior-bord">
      			<div class="selecionado-bord">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/home/borda.png">
									<p class="card-text">Borda</p>
										<!-- Botão Modal Borda -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalBorda">
  Selecionar
</button>
      	  	</div>
              	  </div>
                   <div class="botao botao-bord">

                   </div>
    	 	       </div>
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
					  <h5 class="card-text">R$ 0,00</h5>
                    <!-- Botão Modal Tamanho -->


            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modalpizza">
            Ver Pizza
            </button>
            <button type="button" class="btn btn-primary">
            Fazer Pedido
            </button>

            </div>

            </div>
	           </div>
             </div>

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
  	<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/tamanho/f.png"
									width="80px" height="80px">
        					<p class="card-text">Familia</p>
									<p><?php  echo $f?></p>
      				</div>
    	 	 </div>



					<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/tamanho/g.png"
									width="80px" height="80px">
        					<p class="card-text">Grande</p>
									<p><?php echo $g?></p>
      				</div>
    	 	 </div>

					<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/tamanho/g.png"
									width="80px" height="80px">
        					<p class="card-text">Média</p>
									<p><?php echo $m?></p>
      				</div>
    	 	 </div>
				<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/tamanho/g.png"
									width="80px" height="80px">
        					<p class="card-text">Pequena</p>
									<p><?php echo $p?></p>
      				</div>
    	 	 </div>
					</div>


			 <div class="alert-tam"></div>
      <div class="modal-footer">


        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary salvar-tam">Salvar</button>
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
  	<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/borda/normal.jpg">
        					<p class="card-text">Normal</p>
									<p><?php echo $n?></p>
      				</div>
    	 	 </div>

				<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/borda/recheada.jpg">
        					<p class="card-text">Recheada</p>
									<p><?php echo $r?></p>
      				</div>
    	 	 </div>

      </div>
      	 <div class="alert-bord"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary salvar-bord">salvar</button>
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
										<p>R$ 0,00</p>
      				</div>
    	 	 </div>

				<div class="list-group-item card bg-light">
      				<div class="card-body text-center">
        					<img class="rounded-circle" src="image/tipo/salgado.png">
        					<p class="card-text">Salgado</p>
                    	<p>R$ 0,00</p>
      				</div>
    	 	 </div>
      </div>
       <div class="alert-tipo"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary salvar-tipo">Salvar</button>
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
        <button type="button" class="btn btn-primary">Save changes</button>
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
        <button type="button" class="btn btn-primary salvar-pagamento">Salvar</button>
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
        <td> <h6>Tamanho: <b>Fámilia</b>, Sabor: <b>Frango</b>, Borda: <b>Recheada</b>, Sabor: <b>Frango</b>, Borda: <b>Recheada</b></h6></td>
        <tr><td colspan="2" class="icon-full">

          <i class="far fa-trash-alt fa-2x "></i>
          <input class="form-control" type="number" value="1" id="example-number-input">
		   <br> <br>
		 <h5> <strong>VALOR: </strong><?php echo $vt?></h5>
      </td></tr></tr>


    </tbody>
    </table>

  <br><br>
 <h6> Endereço: <b>Rua Vereador João Silva</b></h6>
 <h6>Nome: <b>Matheus</b></h6>
      				</div>
    	 	 </div>


      </div>
       <div class="alert-tipo"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary reiniciar-pizza" data-dismiss="modal">Continuar montando</button>
        <button type="button" class="btn btn-primary salvar-pizza">Fazer pedido</button>
      </div>
    </div>
  </div>
</div>
</div>

    <script src="script.js"></script>
