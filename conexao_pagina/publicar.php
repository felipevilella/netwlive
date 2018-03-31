  <script type="text/javascript">
    function mostrarResultado(box,num_max,campospan){
     var contagem_carac = box.length;
     var total=400;
     document.getElementById(campospan).innerHTML = total - contagem_carac;
   }
 </script>

 <div class="layoutp4 col-md-6">
   <div class="white-panel4 pn6">

    <div class="form-group">
      <?php
      $url_nome=url_pagina($url_pagina);
       echo "<form action=$url_nome?publicar method=post enctype=multipart/form-data>";
      ?>
      <textarea class="form-control" name="publicacao" rows="7" placeholder="Compartilhe uma ideia, sentimentos" maxlength="400" id="campo" onkeyup="mostrarResultado(this.value,140,'spcontando');contarCaracteres(this.value,140,'sprestante')" required></textarea>
      <span class="upload-wrapper">
        <input type="file"  class="upload-file" id="ImagemUpload" name="foto">
        <img src="imagem/camera.png" class="upload-button" width="31px">
        <span id="spcontando" style="font-family:Georgia; color:black;">400</span>
      </span>

      <button type="submit"  class="btn btn-success btn-block">Publicar</button>
    </form>
  </div>


</div>
</div>

<div class="layoutpopcao col-md-3">
 <div class="white-panel4 pn6">
  <ul>
    <li>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#" data-toggle="modal" data-target="#video"><img src="imagem/play-button.png" onmouseover="this.src='imagem/play-button1.png';"
      onmouseout="this.src='imagem/play-button.png';" width="50px"></a></li>
      <li><br><b><font color="black">Total de seguidores</font></b></li>
      <li><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color="black">
        <?php
        $contador=contador_seguidores_pagina($url_pagina);
        echo "$contador";

 ?></font></li>
    </ul>
  </div>
</div>

<div class="modal fade" id="video" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3>Adicione um video</h3><hr>
      </header>
      <div class="modal-body">
       <?php
      $url_nome=url_pagina($url_pagina);
       echo("<form  method=post  action=$url_nome?video>
         <input type='text' class='form-control' name='video'   maxlength='28' placeholder=' Insira a URL de compartilhamento do video do youtube para mostrar o que está assitindo' required>
         <input type=hidden class='form-control' name='publicacao'  rows='4' maxlength='114' value='' placeholder='Descreva sobre o video'>
         <br/>
         <button type='submit' class='btn btn-small js-modal-close btn-success'>Publicar</button>
         </form>");


         ?>
       </div>
       <div class="modal-footer">

       </div>
     </div>
   </div>
 </div>
</div>

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

       echo("<form  method=post  action=pagina_teste?8  enctype=multipart/form-data>
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

       echo("<form  method=post  action=pagina_teste?7  enctype=multipart/form-data>
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
