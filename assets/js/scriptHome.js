$(function() {
	$('#button').on('click', function() {
		let input1 = $('#input1').val();//pega o valor do input pelo id
		let input2 = $('#input2').val();//pega o valor do input pelo id
        let input3 = $('#input3').val();//pega o valor do input pelo id
        let input4 = $('#input4').val();//pega o valor do input pelo id
        let input5 = $('#input5').val();//pega o valor do input pelo id
		if (input1 !== '' && input2 !== '' && input3 !== '' && input4 !== '' && input5 !== '') {//verifica se os inputs estão vazios
			window.location.href = 'cadastro-servico.php'; //se estuver preenchidos ele redireciona para a pagina cadastro-servico
		} else {
			alert('Cliente não encontrado!'); //se nao ele emite uma mensagem de erro
			return false;
		}
	});
});

$(document).ready(function()
                  {
                  $("#servico").change(function()
        {
            if($(this).val() == "Mensalista")
        {
            $("#servicos").show();
            var today = new Date();
            var dy = today.getDate();
            var mt = today.getMonth()+1;
            var yr = today.getFullYear();
            document.getElementById('tempo').value= dy+"-"+mt+"-"+yr;   
            $("#tempo").show();         
            $("#tempo2").show().attr('type', 'time');
            $("#tempo2").show();
			$('#servicos').val("Mensalista");
        }
        if($(this).val() == "Diarista")
        {
            $("#servicos").show();
            var today = new Date();
            var dy = today.getDate();
            var mt = today.getMonth()+1;
            var yr = today.getFullYear();
            document.getElementById('tempo').value= dy+"-"+mt+"-"+yr;
            $("#tempo").show();
            $("#tempo2").show();
			$('#servicos').val("Diarista");
        }
        if($(this).val() == "Horista")
        {
            $("#servicos").show();
            var today = new Date();
            var dy = today.getDate();
            var mt = today.getMonth()+1;
            var yr = today.getFullYear();
            document.getElementById('tempo').value= dy+"-"+mt+"-"+yr;     
            $("#tempo").show();    
            $("#tempo2").show();         
			$('#servicos').val("Horista");
        }
        if($(this).val() == "nada")
        {           
            $("#servicos").hide();    
            $("#tempo").show();
            $("#tempo2").show(); 

        }
            });
                      $("#servicos").hide();
});