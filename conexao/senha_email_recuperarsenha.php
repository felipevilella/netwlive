
<?php
require_once("PHPMailerAutoload.php");
$mail = new PHPMailer();
 
$mail->IsSMTP(); 
$mail->Host = "smtp.umbler.com"; 
$mail->SMTPAuth = true; 
$mail->Port = 587; 
$mail->SMTPSecure = false; 
$mail->SMTPAutoTLS = false; 
$mail->Username = 'netwlive@netwlive.com.br'; 
$mail->Password = 'Felipe@2718100'; 
 
// DADOS DO REMETENTE
$mail->Sender = "netwlive@netwlive.com.br"; 
$mail->From = "netwlive@netwlive.com.br"; 
$mail->FromName = "Netwlive.com.br"; 
 
// DADOS DO DESTINATÁRIO

$mail->AddAddress("$email", "$nome_usuario"); 
$mail->IsHTML(true); 
$mail->CharSet = 'utf-8'; 
 

$mail->Subject  = "Recuperação de senha Netwlive"; // 

$mail->Body .= " Olá $nome_usuario ,<br><br>
  
  Para recuperar a senha clique no link abaixo: <br><br>
  <a href=$url>$url</a><br><br>

  <h7>Esta notificação foi enviada por um email configurado para não receber resposta.
        Por favor, não responda esta mensagem.</h7><br><br>

  <h4>Netwlive Social Network</h4><br>"; 
 

$enviado = $mail->Send();
$mail->ClearAllRecipients();
 

if ($enviado) {
  $url = 'esquecisenha';
        echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
        echo("<script LANGUAGE=\"JavaScript\">
          alert(\"Email enviado com sucesso para $email.\");
          </SCRIPT>");
} else {
  echo "Não foi possível enviar o e-mail.";
  echo "<b>Detalhes do erro:</b> " . $mail->ErrorInfo;
}

?>