 <?php
 require_once("seguranca.php");
 protegePagina();
 $email=$_SESSION["usuarioLogin"];
 ?>
 <nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="menu?1"><img src="imagem/logo.png"></a>
    </div>
    <form action="menu?2" method="post">
      <div class="col-md-3">
        <div class="form-group">
          <input type="search" name="pesquisa" id="pesquisa"  placeholder="pesquisar" class="form-control"> </div>
        </div>
        <div class="col-md-3">
          <button type="submit" class="btn btn-success" id="botaopesquisar">Buscar</button>
        </div>
      </form> 
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">

          <?php
          include "conexao/notificacao.php";


          require_once"conexao/funcoes.php";
          $usuario=$_SESSION['usuarioLogin'];
          
          $foto=usuario_perfil($usuario);
          $diretorio=caminho_foto($usuario);
          if(empty($foto)){
            echo "<li><a href='menu?1'><img src='imagem/foto_perfil.jpg' class='img-circle' width=30px></a></li>";
          }
          else{
            echo "<li><a href='menu?1'><img src='$diretorio/$foto' class='img-circle' width=30px></a><li>";
          }
        
         ?>



          <li id='header_inbox_bar' class='dropdown' >
           <a data-toggle='dropdown' class='dropdown-toggle' href=''>
             <img src='imagem/notificacao.png' width='27px'>
             <span class="badge bg-theme" id="notificacao_contador"></span>

               <ul class="dropdown-menu extended inbox">
                 <?php  include("conexao/notificacao_lista.php");?>
               </ul>
         </a>
       </li>

          
          <li id='header_inbox_bar' class='dropdown' >
           <a data-toggle='dropdown' class='dropdown-toggle' href=''>
             <img src='imagem/envelope.png' width='27px'>
             <span class="badge bg-theme" id="mensagem_notificacao"></span>

               <ul class="dropdown-menu extended inbox">
                 <?php  include("conexao/mensagens_bd.php");?>
               </ul>
         </a>
       </li>

       <li id='header_inbox_bar' class='dropdown'>
        <a data-toggle='dropdown' class='dropdown-toggle' href=''>
         <img src='imagem/config.png' width='27px'>
         <ul class='dropdown-menu  inbox'>
           <li>
            <a href='menu?configuracao'>
              <span class='message' id="cor">
               Configuração
             </span>
           </a>
         </li> 
         <li>
          <a href='logout'>
            <span class='message' id="cor">
             Sair
           </span>
         </a>
       </li>

     </ul>
   </li>





 </ul>
</div>
</div>
</nav>
