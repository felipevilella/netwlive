$(document).ready(function(){
	inicio_notificacao();
})

	var tempo7 = null;
	var tempo8 = false;
 
	function parar_atualizacao(){
		if(tempo7)
			clearTimeout(tempo8);
			tempo7 = false;
	}

	function inicio_notificacao(){
		parar_atualizacao();
	    atualizacao_notificacao();
	}

	function atualizacao_notificacao(){
		$.ajax({
			url:"conexao/contador_notificacao.php",
			success: function(textStatus){
				$("#notificacao_contador").html(textStatus); 
			}
		})
		tempo7 = setTimeout("atualizacao_notificacao()", 1000); 
		tempo8 = true;
	}