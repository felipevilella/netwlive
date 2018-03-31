
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

$mail->AddAddress("$email_banco", "$nome_banco"); 
$mail->IsHTML(true); 
$mail->CharSet = 'utf-8'; 


$mail->Subject  = "Dados de acesso ao Netwlive"; // 

$mail->Body .= "Olá $nome_banco,<br>
Agradecemos ao seu cadastro na nossa rede social.<br>

<h5><b>Dados de acesso:</b></h5>
Usuario: $email_banco<br>
Senha: *********<br><br>
<b>Atenciosamente,<br>Equipe Netwlive </b><br><br>

<h7>Acesse <a href='https://netwlive.com.br'>netwlive.com.br</a></h7>"; 


$enviado = $mail->Send();
$mail->ClearAllRecipients();


if ($enviado) {

}
?>