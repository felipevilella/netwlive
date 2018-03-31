      <div class="white-panel pn">
        <div class="white-header">
          <?php 
          $usuario=$_SESSION['usuarioNome'];

          echo "<h5>$usuario</h5>";
          ?>
        </div>
        <button type="button" data-toggle="modal" id="add" data-target="#foto_capa"><img src="imagem/adicionar.png"  width="20px"></button>
        <div class="capa">
          <?php
          require_once"conexao/funcoes.php";
          $usuario=$_SESSION['usuarioLogin'];
          
          $capa=usuario_capa($usuario);
          $diretorio=caminho_foto($usuario);

          if(empty($capa)){
            echo "<img src='imagem/capa.jpg'>";
          }
          else{
           echo " <img src='$diretorio/$capa'>";
         }
         

         ?>
       </div>
       <div class="botaop1">
        <a href="menu?foto"><input type="button" class="btn btn-default" value="Foto"></a>
      </div>
      <div class="botaop2">
        <a href="menu?amigos"><input type="button" class="btn btn-default" value="Amigos"></a>
      </div>
      <div class="botaop3">
        <a href="menu?sobre"><input type="button" class="btn btn-default" value="Sobre"></a>
      </div>
      <div class="botaop4">
        <?php
          $nome=nome_pagina($usuario);
          $url=url_pagina($usuario);
          $nome1=substr($nome,0,9);
          if(empty($nome)){
            echo "<button type='button' data-toggle='modal' data-target='#criar_pagina'   class='btn btn-default' >Criar pagina</button>";
          }
          else{
            echo "<a href='$url'><input type='button' class='btn btn-default' value='$nome1'></a>";
          }
        ?>
        
      </div>
      <div class="foto1">
        <?php
        require_once"conexao/funcoes.php";
        $usuario=$_SESSION['usuarioLogin'];

        $foto=usuario_perfil($usuario);
        $diretorio=caminho_foto($usuario);
        if(empty($foto)){
          echo "<img src='imagem/foto_perfil.jpg' class='img-circle'>";
        }
        else{
          echo "<img src='$diretorio/$foto' class='img-circle'>";
        }
        

        ?>
      </div>
      <button id="add1" type="button" data-toggle="modal" data-target="#foto_perfil"><img src="imagem/adicionar.png"  width="20px"></button>
      

    </div>



