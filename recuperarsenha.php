<!DOCTYPE html>
<html>
<head>
	<title>Netwlive</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="imagem/favicon.ico"
  <!--- css ---->
  <link rel="stylesheet" href="./css/bootstrap.min.css" >
  <link rel="stylesheet" href="./css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="./css/login.css">
</head>
<body>
  <script language="JavaScript">
    function verificacao() {
      senha=document.validacao.senha.value;
      senha1=document.validacao.senha1.value;

      if(senha!=senha1){
        alert("senhas divergente!");
        return false;
      }

    }

  </script>

  <div class="logo">
    <a href="index"><img src="imagem/logo.png"></a>
  </div>
  <?php

  $url=$_GET["cod"];
  $urlcodificada=substr($url,0,7);
  $crip=substr($url,7,100);


  if($urlcodificada=="8fd4sf4"){
   include("conexao/dadosautenticaosenha.php");
   if($validarbanco=="1"){

    echo "<div class='Login'>
    
    <form action='recuperarsenha?1' method='post' id='loginform'  name='validacao' onsubmit='return verificacao()'>
    <img class='user' src='imagem/usuario.png'>
    <h4>Recuperação de senha</h4>
    <div class='inputBox'>
    <input type=hidden name=email value='$emailbanco'>
    <input type='password'  name='senha' placeholder='Digite sua nova senha' required>
    <input type='password' name='senha1' placeholder='Repita a sua nova senha' required>
    </div>
    <input type='submit' name='' value='Alterar'>
    </form>
    </div>";
  }
  else{
    $url = 'recuperarsenha';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
    echo("<script LANGUAGE=\"JavaScript\">
      alert(\"url expirada,está pagina será redirecionada para o envio de pedido da alteracao de senha.\");
      </SCRIPT>");
  }
} 
if(isset($_GET["1"])){
  require_once("conexao/funcoes.php");
  $senha=$_POST["senha"];
  $email=$_POST["email"];
  $senhacrip=md5($senha);
  $senha_seguranca=substr($senhacrip,0,12);
  alterar_senha_login($email,$senha_seguranca);
  link_desativado($email);

  $url = 'index';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}

?>



<script src="./js/bootstrap.min.js"></script>
<script src="js/jquery-3.2.1.min.js"></script>
</body>
</html>