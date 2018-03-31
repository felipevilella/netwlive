
       <?php
       if(!isset($_SESSION)) { 
             session_start(); 
        }
        require_once("funcoes.php");
        $email=$_SESSION["usuarioLogin"];
        $contador=contador_notificacao($email);
        if(empty($contador)){

        }
        else{
        echo "$contador";
        }
?>


