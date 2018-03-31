<?php
$conexao=@mysql_connect("mysql642.umbler.com","networknetwlive","Chris2719100")or die("impossivel conectar ao bd1");
$banco=mysql_select_db("netwlive",$conexao)or die("erro ao conectar ao banco");
?>