<!DOCTYPE html>
<html lang="pt-br">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  require_once("classe/resize-class.php");
  include("navbar.php"); 
  include("conexao/foto_dados.php");


  $usuario=$_SESSION["usuarioLogin"];
  $nome_usuario=$_SESSION["usuarioNome"];
  $url_nome=url_pagina($url_pagina);
  online($usuario);

  ?>
  <div class="layout_pagina">
    <div id="tf-home" class="text-center">
      <div class="col-md-9">
        <div class="layout">
         <?php
         include("conexao_pagina/pagina_informacao.php");
         ?>
       </div>
     </div>
   </div>
   <?php
   if($url_pagina==$usuario){
     require_once("classe/dados.class.php");
     $dados=new dados();
     include("conexao_pagina/publicar.php");
   }
   ?>
<?php
if(isset($_GET["foto"])){
 include("conexao_pagina/fotos.php");
}
else if(isset($_GET["v"])){
  echo "<div class='layout-publicacao'>
     <div class='col-md-9' id='posicao'>
      <div class='layoutp5'>";
        
        $usuario=$_SESSION["usuarioLogin"];
        $nome=$_SESSION["usuarioNome"];
        include("conexao_pagina/publicao_video.php");
     
      echo "</div>
    </div>
  </div>
</div>";
}


else {
   echo "<div class='layout-publicacao'>
     <div class='col-md-9' id='posicao'>
      <div class='layoutp5'>";
        
        $usuario=$_SESSION["usuarioLogin"];
        $nome=$_SESSION["usuarioNome"];
        include("conexao_pagina/publicacao_pagina.php");
     
      echo "</div>
    </div>
  </div>
</div>";

if(isset($_GET["publicar"])){
  include("conexao_pagina/pubicar_dados_pagina.php");
}
if(isset($_GET["video"])){  
  $email=$_SESSION['usuarioLogin'];  
  $nome=nome_pagina($usuario);
  $publicacao=$_POST["video"];
  $texto=$_POST["publicacao"];
  $url_nome=url_pagina($url_pagina);


  date_default_timezone_set('America/Sao_Paulo');
  $data = date('Y-m-d');
  $hora= date('H:i:s');
  $ano=substr($data,0,4);
  $dia=substr($data,8,9);
  $mes=substr($data,4,4);

  save_publicacao_video_pagina($usuario,$nome,$publicacao,$ano,$dia,$mes,$hora,$texto);
  $id=save_tbl_publicacao_pagina_amigo_video_id($publicacao);
  save_tbl_publicacao_video_seguidores($id,$usuario,$nome,$texto,$publicacao,$data,$hora);
  
  $url = "$url_nome";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
include("conexao_pagina/alterar_foto_pagina.php");
if(isset($_GET["seguir"])){
 $email=$_SESSION['usuarioLogin'];

$id_usuario=id_usuario($email);
adicionar_linha_tempo_pagina($id_usuario,$url_pagina);

 $url_nome=url_pagina($url_pagina);
 seguir_pagina($email,$url_pagina);
$url = "$url_nome";
 echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["naoseguir"])){
 $email=$_SESSION['usuarioLogin'];
 $url_nome=url_pagina($url_pagina);
 $nome_pagina=nome_pagina($url_pagina);

 
 excluir_publicacao_pagina_amigos($email,$nome_pagina);
 naoseguir_pagina($email,$url_pagina);
 
 $url = "$url_nome";
 echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["exp"])){
  $id=$_GET["exp"];
  $email=$_SESSION["usuarioLogin"];
  $nome_pagina=nome_pagina($url_pagina);
  $url_nome=url_pagina($url_pagina);
  
  include("conexao_pagina/exclusao_bd.php");
  delete_publicacao_pagina($id);
  delete_comentario_publicacao_pagina($id);
  //excluir_publicacao_notificacao($id);

  $url = "$url_nome";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["delfot"])){
  $id=$_GET["delfot"];
  $url_nome=url_pagina($url_pagina);
  deletar_foto_pagina($id);

  $url = "$url_nome?foto";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
}
?>


</body>
</html>


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