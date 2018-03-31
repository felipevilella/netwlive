$(document).ready(function(){
	inicio();
})

	var tempo2 = null;
	var tempo3 = false;

	function parar(){
		if(tempo3)
			clearTimeout(tempo2);
			tempo3 = false;
	}

	function inicio(){
		parar();
		amigo();
	}

	function amigo(){
		$.ajax({
			url:"conexao/amigos_online.php",
			success: function(textStatus){
				$("#amigo").html(textStatus); 
			}
		})
		tempo2 = setTimeout("amigo()", 1000); 
		tempo3 = true;
	}