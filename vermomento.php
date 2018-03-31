<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagem/favicon.ico" >
  <title>Netwlive</title>
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css"  href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <script type="text/javascript" src="js/modernizr.custom.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

  <link rel="stylesheet" href="css/jquery.fancybox.min.css"/>
  <script src="css/jquery.fancybox.min.js"></script>



</head>
<body>


 <?php

 require_once("conexao/funcoes.php");
 include("navbar.php"); 
 include("conexao/foto_dados.php");


 $usuario=$_SESSION["usuarioLogin"];
 $nome_usuario=$_SESSION["usuarioNome"];
 online($usuario);

 ?>
 <div class="col-md-2">
  <div class="layout_momento">
    <div class="white-panel_momento">
      <div class="p_momento">
        <div class="foto">
          <?php
          require_once"conexao/funcoes.php";
          $usuario=$_SESSION['usuarioLogin'];
          $id=$_SESSION["usuarioID"];

          $foto=usuario_perfil($usuario);
          $diretorio=caminho_foto($usuario);
          $nome=usuario_nome($usuario);

          $seguidores=contador_seguidores_amigo($usuario);
          $publicacao=contador_publicacao_amigo($id);
          if(empty($seguidores)){
            $seguidores=0;
          }
          if(empty($publicacao)){
            $publicacao=0;
          }
          if(empty($foto)){
            echo "<img src='imagem/foto_perfil.jpg' class='img-circle'>";
          }
          else{
            echo "<img src='$diretorio/$foto' class='img-circle'>";
          }
           
           echo "
          <label id='informacao1'>Acompanhamento total</label><br>
          <p id='informacao2'>$seguidores</p>
          <label id='informacao1'>Total de Postagem</label><br>
          <p id='informacao2'>$publicacao</p>";

          ?>
        </div>
      </div>
    </div>
  </div>

</div>


  <div class="col-md-6">
    <div class="layoutpublicacao1">
    <?php
     include("conexao/publicacao_momento_amigo.php");
    ?>
  </div>
</div>

  <?php
  if(isset($_GET["publicacao1"])){  
    include("conexao/publicar_momentos_amigos.php");
  }
  if(isset($_GET["publicacao"])){  
    $email=$_SESSION['usuarioLogin'];  
    $nome=$_SESSION['usuarioNome'];
    $publicacao=$_POST["publicacao"];
    $tipo=$_POST["tipo"];

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $hora= date('H:i:s');
    $ano=substr($data,0,4);
    $dia=substr($data,8,9);
    $mes=substr($data,4,4);

    save_publicacao_momento($usuario,$nome,$publicacao,$ano,$dia,$mes,$hora,$tipo);
    $id=save_tbl_publicacao_momentos_amigo_id($publicacao);
    save_tbl_publicacao_momentos_amigo($id,$email,$usuario,$nome,$publicacao,$data,$hora,$tipo);
    
    $url = 'momento?1';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }
  if(isset($_GET["publicacaovideo"])){  
    $email=$_SESSION['usuarioLogin'];  
    $nome=$_SESSION['usuarioNome'];
    $publicacao=$_POST["video"];
    $tipo=$_POST["tipo"];

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('Y-m-d');
    $hora= date('H:i:s');
    $ano=substr($data,0,4);
    $dia=substr($data,8,9);
    $mes=substr($data,4,4);

    save_publicacao_video_momento($usuario,$nome,$publicacao,$ano,$dia,$mes,$hora,$tipo);
    $id=save_tbl_publicacao_momentos_amigo_video_id($publicacao);
    save_tbl_publicacao_mvideo_amigo($id,$email,$usuario,$nome,$publicacao,$data,$hora,$tipo);

   $url = 'momento?1';
   echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }


  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/SmoothScroll.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.js"></script>
  <script type="text/javascript" src="js/main.js"></script>


  <script type="text/javascript" src="js/menu.js"></script>
  <script type="text/javascript" src="js/amigos_online.js"></script>
  <script type="text/javascript" src="js/status_chat.js"></script>
  <script type="text/javascript" src="js/atualizacao_mensagem.js"></script>
  <script type="text/javascript" src="js/carregamento_mensagem.js"></script>
  <script type="text/javascript" src="js/contador_notificacao.js"></script>
  <script type="text/javascript" src="js/notificacao_lista.js"></script>
</body>
</html>