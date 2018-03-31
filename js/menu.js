$(document).ready(function(){
	comeca();
})

	var tempo1 = null;
	var tempo2 = false;

	function para(){
		if(tempo2)
			clearTimeout(tempo1);
			tempo2 = false;
	}

	function comeca(){
		para();
		conversa();
	}

	function conversa(){
		$.ajax({
			url:"conexao/conversa_chat.php",
			success: function(textStatus){
				$("#chat").html(textStatus); 
			}
		})
		tempo1 = setTimeout("conversa()", 1000); 
		tempo2 = true;
	}