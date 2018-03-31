
<?php
if(isset($_GET["1"])){
	echo " 
	<div class='form-group'>
	<textarea rows='4' class='form-control' disabled>Selecione uma opção para informar o seu momento para os seus amigos </textarea>

	<br><button class='btn btn-success btn-block' disabled>Postar</button>
	</div>
	</div>
	</div>
	";
}
if(isset($_GET["9"])){
	echo " 
	<div class='form-group'>
	<form action='momento?publicacao1' method='post' enctype='multipart/form-data'>
	<textarea class='form-control' name='publicacao'  rows='4' placeholder='Mostre seu momentos para seus amigos'  maxlength='1134' required></textarea>
	<span class='upload-wrapper'>
	<input type='file'  class='upload-file' id='ImagemUpload' name='foto'>
	<img src='imagem/camera.png' class='upload-button' width='31px'>
	</span>
	<input type=hidden value='9' name='tipo'>
	<button type='submit' class='btn btn-success btn-block' >Postar</button>
	</form>
	</div>
	</div>
	</div>
	";
}
if(isset($_GET["10"])){
	echo " 
	<div class='form-group'>
	<form action='momento?publicacao' method='post' enctype='multipart/form-data'>
	<textarea class='form-control' name='publicacao'  rows='4' maxlength='600' placeholder='Mostre seu momentos da parte da manha para os seus amigos' required></textarea>
	<input type=hidden value='10' name='tipo'>
	<button type='submit' class='btn btn-success btn-block' >Postar</button>
	</form>
	</div>
	</div>
	</div>
	";
}
if(isset($_GET["5"])){
	echo " 
	<div class='form-group'>
	<form action='momento?publicacao' method='post' enctype='multipart/form-data'>
	<textarea class='form-control' name='publicacao'  rows='4' maxlength='600' placeholder='Mostre seu momentos da parte da tarde para os seus amigos' required></textarea>
	<input type=hidden value='5' name='tipo'>
	<button type='submit' class='btn btn-success btn-block' >Postar</button>
	</form>
	</div>
	</div>
	</div>
	";
}
if(isset($_GET["6"])){
	echo " 
	<div class='form-group'>
	<form action='momento?publicacao' method='post' enctype='multipart/form-data'>
	<textarea class='form-control' name='publicacao'  rows='4' maxlength='600' placeholder='Mostre seu momentos da parte da noite para os seus amigos' required></textarea>
	<input type=hidden value='6' name='tipo'>
	<button type='submit' class='btn btn-success btn-block' >Postar</button>
	</form>
	</div>
	</div>
	</div>
	";
}
if(isset($_GET["7"])){
	echo " 
	<div class='form-group'>
	<form action='momento?publicacaovideo' method='post' enctype='multipart/form-data'>
	<input type='text' class='form-control' name='video'   maxlength='28' placeholder=' Insira a URL de compartilhamento do video do youtube para mostrar o que está assitindo' required>
	<textarea class='form-control' name='publicacao'  rows='4' maxlength='114' placeholder='Descreva sobre o video' required></textarea>
	<input type=hidden value='7' name='tipo'>
	<button type='submit' class='btn btn-success btn-block' >Postar</button>
	</form>
	</div>
	</div>
	</div>
	";
}

?>