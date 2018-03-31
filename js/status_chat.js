$(document).ready(function(){
	inicio_chat();
})

	var tempo4 = null;
	var tempo5 = false;

	function parar_chat(){
		if(tempo4)
			clearTimeout(tempo2);
			tempo5 = false;
	}

	function inicio_chat(){
		parar_chat();
		status_chat();
	}

	function status_chat(){
		$.ajax({
			url:"conexao/status_chat.php",
			success: function(textStatus){
				$("#status").html(textStatus); 
			}
		})
		tempo4 = setTimeout("status_chat()", 1000); 
		tempo5 = true;
	}