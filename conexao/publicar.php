  <script type="text/javascript">
    function mostrarResultado(box,num_max,campospan){
     var contagem_carac = box.length;
     var total=356;
     document.getElementById(campospan).innerHTML = total - contagem_carac;
   }
 </script>

 <div class="layout4">
   <div class="white-panel4 pn6">

    <div class="form-group">
     <form action="menu?publicar" method="POST" enctype="multipart/form-data">
      <textarea class="form-control" name="publicacao" rows="7" placeholder="Compartilhe uma ideia, sentimentos" maxlength="356" id="campo" onkeyup="mostrarResultado(this.value,140,'spcontando');contarCaracteres(this.value,140,'sprestante')" required></textarea>
      <span class="upload-wrapper">
        <input type="file"  class="upload-file" id="ImagemUpload" name="foto">
        <img src="imagem/camera.png" class="upload-button" width="31px">
        <span id="spcontando" style="font-family:Georgia; color:black;">356</span>
      </span>

      <button type="submit"  class="btn btn-success btn-block">Publicar</button>
    </form>
  </div>

</div>
</div>

