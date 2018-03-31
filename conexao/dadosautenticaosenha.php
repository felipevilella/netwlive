<?php
    require_once("classe/senha.class.php");
    $buscar=new senha();
    $emailbanco="";
    $validarbanco="";
   
    $comando="select * from solicitacao_senha where criptografia='$crip'";
    include("functions.php");
    $rs=mysql_query($comando,$conexao);
    $aux=0;
    while ($aux<mysql_num_rows($rs)) {
        $R=mysql_fetch_array($rs);
        $email=$R["usuario"];
        $validar=$R["validar"];

        $buscar->setUsuario($email);
        $emailbanco=$buscar->getUsuario();

        $buscar->setValidacao($validar);
        $validarbanco=$buscar->getValidacao();
        
        $aux++;
    }


?>