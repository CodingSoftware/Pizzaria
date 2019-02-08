
                                    //Inicio seção tamanho
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
                                    //Fim seção tamanho
                                    //Inicio seção Borda
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
                                    //Fim seção Borda
