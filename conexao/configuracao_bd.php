<div class="col-md-5">
	<div class="layoutsobre" >
		<div class="white-panelsobre pnconfiguracao">
			<div class="white-headersobre">
				<h5>Configurações</h5><hr><br>
				<div class="sobre">
					<form action="menu?update" method="post">
						<?php
						
						$Email=$_SESSION["usuarioLogin"];
						$nome=usuario_nome($Email); 

						echo "
						
						<table class='col-md-11'>
						<tr><td><label>Nome</label></td></tr>
						<tr><td><p><input type='text' name='Nome' value='$nome' class='form-control'></p><hr></td></tr>
						<tr><td><label>Email de contato</label></td></tr>
						<tr><td><p><input type='text' value='$Email' class='form-control' disabled></p><hr></td></tr>
						<tr><td><label>Senha</label></td></tr>
						<tr><td><p><input type='hidden' name='email' value='$Email'><a href=menu?senha><input type='button' value='Enviar solicitação' class='btn btn-success'></p><hr></td></tr>
						<tr><td><button type='submit' class='btn btn-primary btn-block'>Salvar</button></td></tr>
						</table>
						";


						?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
