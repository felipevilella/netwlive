$(document).ready(function(){
	inicio_mensagem();
})

	var tempo7 = null;
	var tempo8 = false;
 
	function parar_atualizacao(){
		if(tempo7)
			clearTimeout(tempo8);
			tempo7 = false;
	}

	function inicio_mensagem(){
		parar_atualizacao();
	    atualizacao_mensagem();
	}

	function atualizacao_mensagem(){
		$.ajax({
			url:"conexao/dados_mensagem.php",
			success: function(textStatus){
				$("#mensagem_notificacao").html(textStatus); 
			}
		})
		tempo7 = setTimeout("atualizacao_mensagem()", 1000); 
		tempo8 = true;
	}