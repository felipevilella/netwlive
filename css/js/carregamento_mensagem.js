$(document).ready(function(){
	inicio_mensagem_1();
})

	var tempo8 = null;
	var tempo9 = false;

	function parar_atualizacao_1(){
		if(tempo8)
			clearTimeout(tempo9);
			tempo8 = false;
	}

	function inicio_mensagem_1(){
		parar_atualizacao_1();
	    atualizacao_mensagem_1();
	}

	function atualizacao_mensagem_1(){
		$.ajax({
			url:"conexao/mensagens_bd.php",
			success: function(textStatus){
				$("#carregamento_mensagem").html(textStatus); 
			}
		})
		tempo7 = setTimeout("atualizacao_mensagem_1()", 1000); 
		tempo8 = true;
	}