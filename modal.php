
                                  <!--Inicio seção tamanho-->
<div class="modal fade " id="ModalInsertTamanho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Defina os Tamanhos</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

  <form id="formulariotam">

<div class="col-md-12 mb-3">
    <div class="alert-tam"></div>

    <label for="validationDefault01">Tamanho:</label>
    <input type="text" class="form-control"  id="tam1" name="tamanho" placeholder="Ex: Pequena">
    <input style="display:none"type="text" class="form-control" name="modal" value="tamanho">
    </div>
	<div class="col-md-12 mb-3">
    <label for="validationDefault02">Qnt. Fatias:</label>
    <input type="number" class="form-control"  id="tam2"  name="qntfatia" placeholder="Ex: 5">
    </div>


    <div class="col-md-12 mb-3">
    <label for="validationDefault03">Valor:</label>
    <input type="number" class="form-control"  id="tam3"  name="valort" placeholder="Ex: 14.9">
   </div>
    <div class="col-md-12 mb-3">
   <label for="validationDefault04">Qnt. Sabores:</label>
    <input type="number" class="form-control"  id="tam4"  name="qntsabor" placeholder="Ex: 2">
   </div>

    <input type="button" class="btn btn-success" value="Salvar" id="salvartam">

 </div>
 </form>





</div>


</div>
</div>
</div>

<div class="modal fade " id="ModalDeleteTamanho" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete os Tamanhos</h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <div id="divtam"></div>


</div>

 </div>


</div>
</div>
</div>
                                  <!-- //Fim seção tamanho
                                    //Inicio seção Borda-->
<div class="modal fade " id="ModalInsertBorda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Defina as Bordas</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

  <form id="formulariobord">

  <div class="col-md-12 mb-3">
    <div class="alert-bord"></div>

    <label for="validationDefault01">Borda:</label>
    <input type="text" class="form-control"  id="bord1" name="borda" placeholder="Ex: Recheada">
      <input style="display:none"type="text" class="form-control" name="modal" value="borda">
    </div>

    <div class="col-md-12 mb-3">
    <label for="validationDefault03">Valor:</label>
    <input type="number" class="form-control"  id="bord2"  name="valorb" placeholder="Ex: 2.9">
   </div>


    <input type="button" class="btn btn-success" value="Salvar" id="salvarbord">

 </div>
 </form>





</div>


</div>
</div>
</div>

<div class="modal fade " id="ModalDeleteBorda" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete as Bordas</h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <div id="divbord"></div>


</div>

 </div>


</div>
</div>
</div>
                                  <!-- //Fim seção Borda
                                    //Inicio seção Sabor-->

<div class="modal fade " id="ModalInsertSabor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Defina os Sabores</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

  <form id="formulariosabor">

  <div class="col-md-12 mb-3">
    <div class="alert-sabor"></div>

    <label for="validationDefault01">Sabor:</label>
    <input type="text" class="form-control"  id="sabor1" name="sabor" placeholder="Ex: Frango">
      <input style="display:none"type="text" class="form-control" name="modal" value="sabor">
    </div>

    <div class="col-md-12 mb-3">
    <label for="validationDefault03">Valor:</label>
    <input type="number" class="form-control"  id="sabor2"  name="valors" placeholder="Ex: 8.9">
   </div>


    <input type="button" class="btn btn-success" value="Salvar" id="salvarsabor">

 </div>
 </form>





</div>


</div>
</div>
</div>

<div class="modal fade " id="ModalDeleteSabor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete os Sabores</h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <div id="divsabor"></div>


</div>

 </div>


</div>
</div>
</div>
                                    <!--//Fim seção Sabor

                                    //Inicio seção Bebida-->

<div class="modal fade " id="ModalInsertBebida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Defina as Bebidas</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

  <form id="formulariobebida">

  <div class="col-md-12 mb-3">
    <div class="alert-bebida"></div>

    <label for="validationDefault01">Bebida:</label>
    <input type="text" class="form-control"  id="bebida1" name="bebida" placeholder="Ex: Pepsi">
      <input style="display:none"type="text" class="form-control" name="modal" value="bebida">
    </div>

    <div class="col-md-12 mb-3">
    <label for="validationDefault03">Valor:</label>
    <input type="number" class="form-control"  id="bebida2"  name="valorbe" placeholder="Ex: 5.0">
   </div>

   <div class="col-md-12 mb-3">
   <label for="validationDefault03">Tipo:</label><br>

   <input type="radio"  name="tipo" value="comalcool" placeholder="Ex: 5.0">   C/ Alcool<br>
   <input type="radio"  name="tipo" value="semalcool" placeholder="Ex: 5.0" checked>   S/ Alcool<br>
  </div>


    <input type="button" class="btn btn-success" value="Salvar" id="salvarbebida">

 </div>
 </form>





</div>


</div>
</div>
</div>

<div class="modal fade " id="ModalDeleteBebida" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete as Bebidas</h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <div id="divbebida"></div>


</div>

 </div>


</div>
</div>
</div>
                                    <!--//Fim seção Bebida
                                    //Inicio seção Entrega -->

<div class="modal fade " id="ModalInsertEntrega" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Defina as Entregas</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

  <form id="formularioentrega">

  <div class="col-md-12 mb-3">
    <div class="alert-entrega"></div>



   <div class="col-md-12 mb-3">
   <label for="validationDefault03">Tipo Entrega:</label><br>
   <input style="display:none" type="text" class="form-control" name="modal" value="entrega">
   <input type="radio" class="gratis" name="entrega" value="Gratuita" >  Gratuita<br>
   <input type="radio" class="pago" name="entrega" value="Paga">  Paga<br>
  </div>

  <div class="valor col-md-12 mb-3 esconde">
  <label for="validationDefault03">Valor:</label>
  <input type="number" class="form-control"  id="entrega1"  name="valore" placeholder="Ex: 5.0">
 </div>

    <input type="button" class="btn btn-success" value="Salvar" id="salvarentrega">

 </div>
 </form>





</div>


</div>
</div>
</div>

<div class="modal fade " id="ModalDeleteEntrega" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete as Entregas</h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
  <div id="diventrega"></div>


</div>

 </div>


</div>
</div>
</div>
                                    <!--//Fim seção Entrega -->
