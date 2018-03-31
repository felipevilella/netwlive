$(document).ready(function(){
	inicio_notificacao_1();
})

	var tempo8 = null;
	var tempo9 = false;

	function parar_atualizacao_1(){
		if(tempo8)
			clearTimeout(tempo9);
			tempo8 = false;
	}

	function inicio_notificacao_1(){
		parar_atualizacao_1();
	    atualizacao_notificacao_1();
	}

	function atualizacao_notificacao_1(){
		$.ajax({
			url:"conexao/notificacao_lista.php",
			success: function(textStatus){
				$("#carregamento_notificacao").html(textStatus); 
			}
		})
		tempo7 = setTimeout("atualizacao_notificacao_1()", 1000); 
		tempo8 = true;
	} 