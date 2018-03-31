	<div class="layoutsobre1" class="col-md-12">
		<div class="white-panelsobre pnsobre1">
			<div class="white-headersobre1">
				<h4>Sobre: <br><br><br></h4>
				<div class="sobre1">
					<?php
					include("sobre_bd.php");
					$data=usuario_data($email);
					$ano=substr($data,0,4);
					$dia=substr($data,8,9);
					$mes=substr($data,4,4);
					$cont=0;

					if($aux<1){
						echo "<table class='col-md-11'>
						<tr><td><label> CIDADE ATUAL</label></td></tr>
						<tr><td><p>NÃO POSSUI UMA CIDADE ATUAL</p><hr></td></tr>
						<tr><td><label> DATA DE NASCIMENTO</label></td></tr>
						<tr><td><p>$dia$mes$ano</p><hr></td></tr>
						<tr><td><label> GENERO</label></td></tr>
						<tr><td><p>GENERO NÃO ESCOLHIDO</p><hr></td></tr>
						<tr><td><label> SOBRE VOCÊ</label></td></tr>
						<tr><td><p>NÃO HA DESCRIÇÃO</p><hr></td></tr>
						<tr><td><label> TRABALHO</label></td></tr>
						<tr><td><p>NÃO POSSUI UM LOCAL DE TRABALHO</p><hr></td></tr>
						<tr><td><label> FORMAÇÃO</label></td></tr>
						<tr><td><p>NÃO POSSUI FORMAÇÃO</p><hr></td></tr>
						</table>";
					}
					else{
						
						while ($cont<1) {
							echo "<table class='col-md-11'>
							<tr><td><label> CIDADE ATUAL</label></td></tr>";
							if(empty($Cidade[$cont])){
								echo "<tr><td><p>NÃO POSSUI UMA CIDADE ATUAL </p><hr></td></tr>";
							}
							else{
								echo "<tr><td><p>$Cidade[$cont]</p><hr></td></tr>";
							}
							
							echo "<tr><td><label> DATA DE NASCIMENTO</label></td></tr>";
							echo "<tr><td><p>$dia$mes$ano</p><hr></td></tr>";

							echo "<tr><td><label> GENERO</label></td></tr>";
							if(empty($Genero[$cont])){
								echo "<tr><td><p>GENERO NÃO ESCOLHIDO</p><hr></td></tr>";
							}
							else{
							echo "<tr><td><p>$Genero[$cont]</p><hr></td></tr>";
							}
							echo "<tr><td><label> SOBRE VOCÊ</label></td></tr>";
							if(empty($Sobre[$cont])){
								echo "<tr><td><p>NÃO HA DESCRIÇÃO</p><hr></td></tr>";
							}
							else{
							echo "<tr><td><p>$Sobre[$cont]</p><hr></td></tr>";
							}
							echo "<tr><td><label> TRABALHO</label></td></tr>";
							if(empty($Trabalho[$cont])){
								echo "<tr><td><p>NÃO POSSUI UM LOCAL DE TRABALHO</p><hr></td></tr>";
							}
							else{
							echo "<tr><td><p>$Trabalho[$cont]</p><hr></td></tr>";
							}
							echo "<tr><td><label> FORMAÇÃO</label></td></tr>";
							if(empty($Formacao[$cont])){
								echo "<tr><td><p>NÃO POSSUI FORMAÇÃO</p><hr></td></tr>";
							}
							else{
								echo "<tr><td><p>$Formacao[$cont]</p><hr></td></tr>";
							}
							
							echo "</table>";
							$cont++;
						}
						
					}
					?>

				</div>
			</div>
		</div>
	</div>
</div>
