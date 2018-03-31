<?php
$comando="select * from netwamigo where email='$email'";
include("functions.php");
$rs=mysql_query($comando,$conexao)or die("impossivel enviar");
$aux=0;

while($aux<mysql_num_rows($rs)) {
 $R=mysql_fetch_array($rs);
 $emailamigo=$R["emailamigo"];

    $comando="select * from usuarios where usuario='$emailamigo'";
    include("functions.php");
    $rs1=mysql_query($comando,$conexao)or die("impossivel enviar");
    $aux1=0;
      while($aux1<mysql_num_rows($rs1)) {
          $R1=mysql_fetch_array($rs1);
          $idtabela=$R1["id"];

          $comando="delete  from netw$idtabela where id='$id'"; 
          include("functions.php");
          mysql_query($comando,$conexao)or die("impossivel enviar na tabela $idtabela");
          $aux1++; 
}
$aux++;
}

?>