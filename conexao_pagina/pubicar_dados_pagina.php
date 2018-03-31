<?php
$imagem=$_FILES['foto']['name']; 
$publicacao=$_POST["publicacao"];
$email=$_SESSION['usuarioLogin'];  
$nome=nome_pagina($email);


date_default_timezone_set('America/Sao_Paulo');
$data = date('Y-m-d');
$hora= date('H:i:s');
$ano=substr($data,0,4);
$dia=substr($data,8,9);
$mes=substr($data,4,4);

 $url_nome=url_pagina($usuario);

if(empty($imagem)){
  save_publicacao_pagina($usuario,$nome,$publicacao,$ano,$dia,$mes,$hora);
  $id=save_tbl_publicacao_pagina_amigo_id($publicacao);
  save_tbl_publicacao_seguidores($id,$email,$usuario,$nome,$publicacao,$data,$hora);

 $url = "$url_nome";
 echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

}
else{
  $foto=$_FILES["foto"]; 
  $largura = 900;
  $altura =1000;
  $tamanho = 50000;
  $dimensoes = getimagesize($foto["tmp_name"]);

  if($dimensoes[0] > $largura) {
    $error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
  }
  if($dimensoes[1] > $altura) {
    $error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
  }
  if($foto["size"] > $tamanho) {
    $error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
  }

  $error=0;
  if ($error == 0) {

    preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    $caminho =caminho_foto($email);
    $caminho_imagem = "$caminho/" . $nome_imagem;
    move_uploaded_file($foto["tmp_name"],$caminho_imagem);
    $data="$dia$mes$ano";

    save_publicacao_pagina_imagem($usuario,$nome,$publicacao,$caminho_imagem,$ano,$dia,$mes,$hora);
    $id=save_tbl_publicacao_pagina_amigo_id($publicacao);
    save_tbl_publicacao_imagem_seguidores($id,$usuario,$nome,$publicacao,$caminho_imagem,$data,$hora);
    adicionar_foto_pagina($email,$caminho_imagem);
 
  }


 $url = "$url_nome";
echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


}




?>