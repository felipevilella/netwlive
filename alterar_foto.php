<div class="modal fade" id="foto_perfil" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Enviar Foto de perfil</h3><hr>
      </header>
      <div class="modal-body">
       <?php

       echo("<form  method=post  action=menu?4  enctype=multipart/form-data>
         <input name=foto type=file class='form-control' required>
         <br/>
         <button type='submit' class='btn btn-small js-modal-close btn-success'>Salvar</button>
         </form>");


         ?>
       </div>
       <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>

<div class="modal fade" id="foto_capa" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Enviar Foto de Capa</h3><hr>
      </header>
      <div class="modal-body">
       <?php

       echo("<form  method=post  action=menu?3  enctype=multipart/form-data>
         <input name=foto type=file class='form-control' required>
         <br/>
         <button type='submit' class='btn btn-small js-modal-close btn-success'>Salvar</button>
         </form>");


         ?>
       </div>
       <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>

<!-- criar pagina -->
<div class="modal fade" id="criar_pagina" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Criar pagina</h3><hr>
      </header>
      <div class="modal-body">
       <?php

       echo("<form  method=post  action=menu?criarpagina>
        <label>Nome: </label>
         <input type=text name='pagina' placeholder='Digite o nome da pagina' class='form-control' required>
        <label>URL personalizada(sem espaço)</label>
         <input type=text name='url' placeholder='Digite o nome' class='form-control' required>
         <br/>
         <button type='submit' class='btn btn-small js-modal-close btn-success'>Salvar</button>
         </form>");


         ?>
       </div>
       <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
</div>