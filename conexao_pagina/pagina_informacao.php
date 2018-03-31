      <div class="white-panel pn">
        <div class="white-header">
          <?php 
          $usuario=$_SESSION['usuarioLogin'];
          $nome_pagina=nome_pagina($url_pagina);
          echo "<h5>$nome_pagina</h5>";
          ?>
        </div>
        <button type="button" data-toggle="modal" id="add" data-target="#foto_capa"><img src="imagem/adicionar.png"  width="20px"></button>
        <div class="capa1">
          <?php
          require_once"conexao/funcoes.php";
          $usuario=$_SESSION['usuarioLogin'];

          
          $capa=usuario_capa_pagina($url_pagina);
          $diretorio=caminho_foto($url_pagina);

          if(empty($capa)){
            echo "<img src='imagem/capa.jpg'>";
          }
          else{
           echo " <img src='$diretorio/$capa'>";
         }
         

         ?>
       </div>
       <div class="botaopa1">
        <?php
        if($url_pagina==$usuario){
          echo "<input type='button' class='btn btn-default' value='administrador'>";
        }
        else{


          $seguidores=pagina_seguidores($usuario,$url_pagina);

          if($seguidores!=$usuario){
            echo "<a href='$url_nome?seguir'><input type='button' class='btn btn-default' value='Seguir pagina'></a>";
          }
          else if($seguidores==$usuario){
            echo "<a href='$url_nome?naoseguir'><input type='button' class='btn btn-danger' value=' Deixar de seguir'></a>";
          }

        }
        ?>
      </div>
      <?php
      echo "<div class='botaopa2'>
        <a href='$url_nome?v'><input type='button' class='btn btn-default' value='Video'></a>
      </div>
      <div class='botaopa3'>
        <a href='$url_nome?foto'><input type='button' class='btn btn-default' value='Fotos'></a>
      </div>
      <div class='botaopa4'>
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       
     </div>";
     ?>
     <div class="botaopa5">
       <?php
       $contador=contador_seguidores_pagina($url_pagina);
       echo "<font color='black'> $contador Seguindo a pagina</font>";

       ?>
     </div>

     <div class="posicao_foto">
      <div class="foto1">
        <?php
        require_once"conexao/funcoes.php";
        $usuario=$_SESSION['usuarioLogin'];

        $foto=usuario_perfil_capa($url_pagina);
        $diretorio=caminho_foto($url_pagina);
        if(empty($foto)){
          echo "<img src='imagem/foto_perfil.jpg' class='img-circle'>";
        }
        else{
          echo "<img src='$diretorio/$foto' class='img-circle'>";
        }


        ?>
      </div>
    </div>
    <button id="add3" type="button" data-toggle="modal" data-target="#foto_perfil"><img src="imagem/adicionar.png"  width="20px"></button>
  </div>



