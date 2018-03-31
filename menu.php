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

  <div id="tf-home" class="text-center">
   <div class="col-md-5">
    <div class="layout">
     <?php
     include("conexao/perfil_informacao.php");
     ?>

     <div class="layout2">
       <div class="white-panel2 pn3">
        <div class="white-header2">
          <b>Opções</b>
        </div>
        <?php
        $momento=momento($usuario);
        if(empty($momento)){
         echo "<a href=''><button class='btn btn btn-default btn-block' disabled>Ver momentos</button></a>";
       }
       else{
        echo "<a href='vermomento'><button class='btn btn btn-default btn-block'>Ver momentos</button></a>";
      }?>
      <a href="menu?configuracao"><button class="btn btn btn-default btn-block">Configurações</button></a>

    </div>
  </div>
  <div class="layout2">
   <div class="white-panel2 pn4">
    <div class="white-header2">
      <b>Momentos</b>
    </div>

    <?php
    require_once("conexao/funcoes.php");
    $momento=momento($usuario);
    if(empty($momento)){
      echo " <a href='menu?momento'><button class='btn btn btn-default btn-block'>Criar momento</button></a>";
    }
    else{
     echo " <a href='momento?1'><button class='btn btn btn-default btn-block'>Seu momento</button></a>";
   }
   ?>

 </div>
</div>
</div>

<div class="layout6">
 <?php
 include("conexao/publicacao_perfil.php");
 ?>


</div>
</div>

<div class="col-md-2">
  <div class="layout3" >
   <div class="white-panel3 pn5">
    <div class="white-header3 ds">
      <h5>Contatos</h5>
    </div>

    <div class="desc" id="amigo"></div>
    

  </div>
</div>
</div>
</div>

<?php
if(isset($_GET["1"])){
  echo "<div class='col-md-5'>";

  include("conexao/publicar.php");

  echo "<div class='layout5'>";

  include("conexao/publicacao_amigos.php");
}
?>

</div>


<?php
require_once("conexao/funcoes.php");
if(isset($_GET["publicar"])){
  include("conexao/publicardados.php");

}
if(isset($_GET["2"])){
  $pesquisa=$_POST["pesquisa"];
  include"conexao/buscaamigo.php";
  include"conexao/buscarpagina_.php";

}
if(isset($_GET["p"])){

  $dir=$_GET["p"];
  $email_amigo=dir_email($dir);
  include("conexao/perfil_amigo.php");
  include("conexao/amigos_perfil.php");
  echo"<div class='layout6'>";
  include("conexao/publicacao_perfil_amigo.php");
  echo "  </div></div>";

}
if(isset($_GET["amigos"])){
  $email_publicacao=$_SESSION["usuarioLogin"];
  include"conexao/amigos.php";
}
if(isset($_GET["amigos1"])){
  $amigos=$_GET["amigos1"];
  $email_publicacao=dir_email($amigos);
  $nome=usuario_nome($email_publicacao);
  $dir=$_GET["amigos1"];
  include("conexao/perfil_amigo.php");
  include"conexao/amigos1.php";

}



if(isset($_GET["add"])){
  $add=$_GET["add"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];

  enviar_solicitacao($emailusuario,$email_amigo);

  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
if(isset($_GET["del"])){
  $add=$_GET["del"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];

  deletar_solicitacao($emailusuario,$email_amigo);

  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
if(isset($_GET["acc"])){
  $add=$_GET["acc"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];
  
  $id_usuario=id_usuario($emailusuario);
  $id_amigo=id_usuario($email_amigo);

  adicionar_linha_tempo($id_usuario,$email_amigo);
  adicionar_linha_tempo($id_amigo,$emailusuario);

  adicionar_amigo($emailusuario,$email_amigo);
  adicionar_amigo($email_amigo,$emailusuario);

  deletar_solicitacao($email_amigo,$emailusuario);

  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
if(isset($_GET["rec"])){
  $add=$_GET["rec"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];

  deletar_solicitacao($email_amigo,$emailusuario);


  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
if(isset($_GET["exc"])){
  $add=$_GET["exc"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];
  
  $id_usuario=usuario_id($emailusuario);
  $id_amigo=usuario_id($email_amigo);

  deletar_amizade($emailusuario,$email_amigo);
  deletar_amizade($email_amigo,$emailusuario);

  deletar_amizade_publicacao($id_usuario,$email_amigo);
  deletar_amizade_publicacao($id_amigo,$emailusuario);

  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
if(isset($_GET["c"])){
  $dir=$_GET["c"];
  include("conexao/chat_amigos.php");
  $_SESSION['email_amigo']=$Email_chat; 
  $emailusuario=$_SESSION['usuarioLogin'];
  
  $contador=contador_mensagem1($emailusuario,$Email_chat);
  $email_contador=contador_email($emailusuario,$Email_chat);

  if($contador>0){
    echo "";

    if($email_contador==$emailusuario){

     mensagem_lida($emailusuario,$Email_chat);

   }
 }

 echo "<div class='col-md-5'>";
 include("conexao/publicar.php");
 echo "<div class='layout5'>";
 include("conexao/publicacao_amigos.php");
 include("conexao/chat.php");
}
if(isset($_GET["cp"])){
  $dir=$_GET["cp"];
  include("conexao/chat_amigos.php");
  $_SESSION['email_amigo']=$Email_chat; 
  $emailusuario=$_SESSION['usuarioLogin'];
  
  $contador=contador_mensagem1($emailusuario,$Email_chat);
  $email_contador=contador_email($emailusuario,$Email_chat);

  if($contador>0){
    echo "";

    if($email_contador==$emailusuario){

     mensagem_lida($emailusuario,$Email_chat);

   }
 }

 include("conexao/perfil_amigo.php");
 include("conexao/amigos_perfil.php");
 echo"<div class='layout6'>";
 include("conexao/publicacao_perfil_amigo.php");
 echo "  </div></div>";
 include("conexao/chat.php");


}



if(isset($_GET["con"])){
  $id=$_POST["id"];
  $comentario=$_POST["comentario"];
  $emailusuario=$_SESSION['usuarioLogin'];
  adicionar_comentario($id,$comentario,$emailusuario);
  $emailamigo=emailpublicacao($id);
  notificacao_comentario($id,$emailusuario,$emailamigo);

  $url = "menu?publi=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["publi"])){

  $id_postagem=$_GET["publi"];
  echo "<div class='col-md-5'>";

  include("conexao/publicar.php");

  echo "<div class='layout5'>";
  include("conexao/publicacao_id.php");

}
if(isset($_GET["ex"])){
  $id=$_GET["ex"];
  $email=$_SESSION["usuarioLogin"];
  $idpublicacao=id_publicacao($id);
  delete_comentario($id);
  excluir_comentario($idpublicacao,$email);
  $url = "menu?publi=$idpublicacao";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["exp"])){
  $id=$_GET["exp"];
  $email=$_SESSION["usuarioLogin"];
  
  include("conexao/exclusao_bd.php");
  delete_publicacao($id);
  delete_comentario_publicacao($id);
  excluir_publicacao_notificacao($id);

  $url = "menu?1";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["cur"])){
  $id=$_GET["cur"];
  $email=$_SESSION["usuarioLogin"];
  
  $emailamigo=emailpublicacao($id);
  curtidaspostagem($id,$email);
  notificacao_curtida($email,$id,$emailamigo);

  $url = "menu?publi=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["curn"])){
  $id=$_GET["curn"];
  $email=$_SESSION["usuarioLogin"];
  
  $emailamigo=emailpublicacao($id);
  descurtidaspostagem($id,$email);
  notificacao_descurtida($email,$id,$emailamigo);

  $url = "menu?publi=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["desct"])){
  $id=$_GET["desct"];
  $email=$_SESSION["usuarioLogin"];
  
  descurtir($id,$email);
  notificacao_descurtir($id,$email);

  $url = "menu?publi=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["publin"])){
  $id=$_GET["publin"];
  update_notificacao($id);

  $url = "menu?publi=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["sobre"])){
 $email=$_SESSION["usuarioLogin"];
 include"conexao/sobre.php";
}
if(isset($_GET["sobreadd"])){
 $email=$_SESSION["usuarioLogin"];
 include"conexao/sobreadd.php";
}
if(isset($_GET["addsobre"])){
  $email=$_SESSION["usuarioLogin"];
  $cidade=$_POST["cidade"];
  $formacao=$_POST["formacao"];
  $genero=$_POST["genero"];
  $sobre=$_POST["sobre"];
  $trabalho=$_POST["trabalho"];

  adicionar_sobre($email,$cidade,$formacao,$genero,$sobre,$trabalho);

  $url = "menu?sobre";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["addsobre1"])){
  $email=$_SESSION["usuarioLogin"];
  $cidade=$_POST["cidade"];
  $formacao=$_POST["formacao"];
  $genero=$_POST["genero"];
  $sobre=$_POST["sobre"];
  $trabalho=$_POST["trabalho"];

  adicionar_sobre1($email,$cidade,$formacao,$genero,$sobre,$trabalho);

  $url = "menu?sobre";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["samg"])){
  $dir=$_GET["samg"];
  $email=dir_email($dir);
  $nome=usuario_nome($email);
  include("conexao/perfil_amigo.php");
  include("conexao/sobre_amigo.php");
}
if(isset($_GET["foto"])){
 $email=$_SESSION["usuarioLogin"];
 include("conexao/fotos.php");
}
if(isset($_GET["f"])){
  $dir=$_GET["f"];
  $email=dir_email($dir);
  $nome=usuario_nome($email);
  include("conexao/perfil_amigo.php");
  include("conexao/foto_amigo.php");
}
if(isset($_GET["momento"])){


  criar_momento($nome_usuario,$usuario);
  $id=usuario_id($usuario);
  table_momento_id($id);
  
  $url = "menu?1";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["seguir"])){
  $add=$_GET["seguir"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];

  seguir($emailusuario,$email_amigo);

  $id_usuario=id_usuario($emailusuario);
  $id_amigo=id_usuario($email_amigo);

  adicionar_linha_tempo_momentos($id_usuario,$email_amigo);
  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["naoseguir"])){
  $add=$_GET["naoseguir"];  
  $email_amigo=dir_email($add);
  $emailusuario=$_SESSION['usuarioLogin'];
  
  $id_amigo=id_usuario($emailusuario);
  delete_linha_tempo($id_amigo,$email_amigo);
  naoseguir($emailusuario,$email_amigo);

  $url = "menu?p=$add";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["delfot"])){
  $id=$_GET["delfot"];
  deletar_foto($id);

  $url = "menu?foto";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["configuracao"])){
 $email=$_SESSION["usuarioLogin"];
 include"conexao/configuracao_bd.php";
}
if(isset($_GET["update"])){
 $email=$_SESSION["usuarioLogin"];
 $nome=$_POST["Nome"];
 update_nome($email,$nome);
 update_nome_publicacao($email,$nome);
 update_nome_publicacao_amigos($email,$nome);
 $url = "menu?configuracao";
 echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["senha"])){
  $email=$_SESSION["usuarioLogin"];
  $emailurl=md5($email);
  include"conexao/senha_solicitacao.php";
  $nome_usuario=usuario_nome($email);
  
  include"conexao/senha_email_recuperarsenha.php";
 $url = "menu?configuracao";
 echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}

###


if(isset($_GET["criarpagina"])){
  $pagina=$_POST["pagina"];
  $url=$_POST["url"];
  $email=$_SESSION["usuarioLogin"];
  
  $url_nome=url_pagina_criacao($url);

  if($url_nome==$url){
  echo("<script LANGUAGE=\"JavaScript\">
  alert(\"Url personalizada já existente, solicitamos que digite novamente.\");
  </SCRIPT>");
   $url = "menu?1";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
  }
  else{
   cria_pagina($pagina,$url,$email);
  
  $arquivo1 = fopen("$url.php", "w");
  $url_variavel='$url_pagina';
  $url_email="$url_variavel = '$email';";

  $texto = "<?php
  $url_email
  include('pagina_teste.php');
  ?>";

  fwrite($arquivo1, $texto);

  fclose($arquivo1);
  $url = "menu?1";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}

}
if(isset($_GET["compagina"])){
  $id=$_POST["id"];
  $comentario=$_POST["comentario"];
  $emailusuario=$_SESSION['usuarioLogin'];
  adicionar_comentario_pagina($id,$comentario,$emailusuario);
  $emailamigo=emailpublicacao($id);
  notificacao_comentario($id,$emailusuario,$emailamigo);

  $url = "menu?publipagina=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["expagina"])){
  $id=$_GET["expagina"];
  $email=$_SESSION["usuarioLogin"];
  $idpublicacao=id_publicacao_pagina($id);
  delete_comentario_pagina($id);
  excluir_comentario($idpublicacao,$email);
  $url = "menu?publipagina=$idpublicacao";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["curpagina"])){
  $id=$_GET["curpagina"];
  $email=$_SESSION["usuarioLogin"];

  $emailamigo=emailpublicacao($id);
  curtidaspostagem_pagina($id,$email);
  notificacao_curtida($email,$id,$emailamigo);

  $url = "menu?publipagina=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["curnpagina"])){
  $id=$_GET["curnpagina"];
  $email=$_SESSION["usuarioLogin"];

  $emailamigo=emailpublicacao($id);
  descurtidaspostagem_pagina($id,$email);
  notificacao_descurtida($email,$id,$emailamigo);

  $url = "menu?publipagina=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["desctpagina"])){
  $id=$_GET["desctpagina"];
  $email=$_SESSION["usuarioLogin"];

  descurtir_pagina($id,$email);
  notificacao_descurtir($id,$email);

  $url = "menu?publipagina=$id";
  echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}
if(isset($_GET["publipagina"])){

  $id_postagem=$_GET["publipagina"];
  echo "<div class='col-md-5'>";

  include("conexao/publicar.php");

  echo "<div class='layout5'>";
  include("conexao_pagina/publicacao_id_pagina.php");

}
?>



<?php
include("alterar_foto.php");
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