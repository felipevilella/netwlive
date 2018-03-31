<div class="col-md-5">
	<div class="layoutsobre" >
		<div class="white-panelsobre pnsobre">
			<div class="white-headersobre">
				<h5>Sobre</h5><hr><br>
				<div class="sobre">
					<?php
					include("sobre_bd.php");
					$data=usuario_data($email);
					$ano=substr($data,0,4);
					$dia=substr($data,8,9);
					$mes=substr($data,4,4);
					$cont=0;

					if($aux==0){
						echo "
						<div class='form-group'>
						<form action='menu?addsobre' method='post'>
						<table class='col-md-11'>
						<tr><td><label> CIDADE ATUAL</label></td></tr>
						<tr><td><p><input type='text' name='cidade' class='form-control' placeholder='DIGITE A CIDADE ATUAL'></p></td></tr>
						<tr><td><label> DATA DE NASCIMENTO</label></td></tr>
						<tr><td><p>$dia$mes$ano</p></td></tr>
						<tr><td><label> GENERO</label></td></tr>
						<tr><td><p><select class='form-control' name='genero'> 
						<option value=''>Selecione</option>
						<option value='Masculino'>Masculino</option>
						<option value='Feminino'>Feminino</option>

						</select></p></td></tr>
						<tr><td><label> SOBRE VOCÊ</label></td></tr>
						<tr><td><p><textarea class='form-control' maxlength='200' name='sobre'></textarea></p></td></tr>
			 			<tr><td><label> TRABALHO</label></td></tr>
						<tr><td><p><input type='text' name='trabalho' class='form-control' placeholder='DIGITE O LOCAL QUE ESTÁ TRABALHANDO'></p></td></tr>
						<tr><td><label> FORMAÇÃO</label></td></tr>
						<tr><td><p><input type='text' name='formacao' class='form-control' placeholder='DIGITE A SUA FORMAÇÃO'></p></td></tr>
						<tr><td><button type=submit class='btn btn-success col-md-12 btn-block'>Salvar</button></td></tr>
						</table>
						</form>
						</div>";
					}
					else{
					while ($cont<1) {
						echo "
						<div class='form-group'>
						<form action='menu?addsobre1' method='post'>
						<table>
						<tr><td><label> CIDADE ATUAL</label></td></tr>
						<tr><td><p><input type='text' name='cidade' class='form-control' placeholder='DIGITE A CIDADE ATUAL' value='$Cidade[$cont]'></p></td></tr>
						<tr><td><label> DATA DE NASCIMENTO</label></td></tr>
						<tr><td><p>$dia$mes$ano</p></td></tr>
						<tr><td><label> GENERO</label></td></tr>
						<tr><td><p><select class='form-control' name=genero> ";
						if(empty($Genero[$cont])){
						  echo "
						  <option value=''>Selecione</option>
						  <option value='Masculino'>Masculino</option>
						<option value='Feminino'>Feminino</option>";
						}else{
							echo "<option value='$Genero[$cont]'>$Genero[$cont]</option>
						<option value='Masculino'>Masculino</option>
						<option value='Feminino'>Feminino</option>";
						}
						

						echo "</select></p></td></tr>
						<tr><td><label> SOBRE VOCÊ</label></td></tr>
						<tr><td><p><textarea class='form-control' maxlength='200' name='sobre'>$Sobre[$cont]</textarea></p></td></tr>
						<tr><td><label> TRABALHO</label></td></tr>
						<tr><td><p><input type='text' name='trabalho' class='form-control' value='$Trabalho[$cont]' placeholder='DIGITE O LOCAL QUE ESTÁ TRABALHANDO'></p></td></tr>
						<tr><td><label> FORMAÇÃO</label></td></tr>
						<tr><td><p><input type='text' name='formacao' class='form-control' value='$Formacao[$cont]'placeholder='DIGITE A SUA FORMAÇÃO'></p></td></tr>

						<tr><td><button type=submit class='btn btn-success'>Salvar</button></td></tr>              
						</table>
						</form>
						</div>";
							$cont++;
					}
				
					}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
