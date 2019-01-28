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
            var diaHoje = new Date();
            var mesHoje = new Date();
            var horaHoje = new Date();
            var minutosHoje = new Date();
            diaHoje.getDate();
            mesHoje.setMonth(mesHoje.getMonth()+1);
            diaHoje.getFullYear();
            horaHoje.getHours();
            minutosHoje.getMinutes();
            var diaAmanha = new Date();
            var mesAmanha = new Date();            
            diaAmanha.getDate();
            mesAmanha.setMonth(diaAmanha.getMonth()+2);
            diaAmanha.getFullYear();   
            
            function addZero(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
            
            document.getElementById('tempo').value=diaHoje.getDate()+"/"+mesHoje.getMonth()+"/"+diaHoje.getFullYear();
           
            document.getElementById('resultadoTempo').value=diaAmanha.getDate()+"/"+mesAmanha.getMonth()+"/"+diaAmanha.getFullYear();

            document.getElementById('tempo2').value=addZero(horaHoje.getHours())+":"+addZero(minutosHoje.getMinutes());

            document.getElementById('resultadoTempo2').value=addZero(horaHoje.getHours())+":"+addZero(minutosHoje.getMinutes());
            $("#tempo2").show();
            $("#resultadoTempo").show();
            $("#resultadoTempo2").show(); 
            $("#escritaDiaEntrada").show();
            $("#escritaHoraEntrada").show(); 
            $("#escritaDiaSaida").show();
            $("#escritaHoraSaida").show();
            $("#botao").show(); 
            $('#servicos').val("Mensalista");                       
        }
        if($(this).val() == "Diarista")
        {
            $("#servicos").show();
            var diaHoje = new Date();
            var mesHoje = new Date();
            var horaHoje = new Date();
            var minutosHoje = new Date();
            diaHoje.getDate();
            mesHoje.setMonth(mesHoje.getMonth()+1);
            diaHoje.getFullYear();
            horaHoje.getHours();
            minutosHoje.getMinutes();
            var diaAmanha = new Date();
            var mesAmanha = new Date();
            diaAmanha.setDate(diaAmanha.getDate()+1);
            mesAmanha.setMonth(diaAmanha.getMonth()+1);
            diaAmanha.getFullYear();
            
            function addZero(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
            
            document.getElementById('tempo').value=diaHoje.getDate()+"/"+mesHoje.getMonth()+"/"+diaHoje.getFullYear();
           
            document.getElementById('resultadoTempo').value=diaAmanha.getDate()+"/"+mesAmanha.getMonth()+"/"+diaAmanha.getFullYear();
            
            document.getElementById('tempo2').value=addZero(horaHoje.getHours())+":"+addZero(minutosHoje.getMinutes());

            document.getElementById('resultadoTempo2').value=addZero(horaHoje.getHours())+":"+addZero(minutosHoje.getMinutes());
            $("#tempo").show();
            $("#tempo2").show();
            $("#resultadoTempo").show();
            $("#resultadoTempo2").show(); 
            $("#escritaDiaEntrada").show();
            $("#escritaHoraEntrada").show(); 
            $("#escritaDiaSaida").show();
            $("#escritaHoraSaida").show();
            $("#botao").show();  
			$('#servicos').val("Diarista");
        }
        if($(this).val() == "Horista")
        {
            $("#servicos").show();
            var diaHoje = new Date();
            var mesHoje = new Date();
            var horaHoje = new Date();
            var minutosHoje = new Date();
            diaHoje.getDate();
            mesHoje.setMonth(mesHoje.getMonth()+1);
            diaHoje.getFullYear();
            horaHoje.getHours();
            minutosHoje.getMinutes();
            var diaAmanha = new Date();
            var HoraAmanha = new Date();            
            diaAmanha.getDate();
            mesHoje.getMonth();
            diaAmanha.getFullYear();
            HoraAmanha.setHours(horaHoje.getHours()+1);        
            
            function addZero(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }   
            
            
            document.getElementById('tempo').value=diaHoje.getDate()+"/"+mesHoje.getMonth()+"/"+diaHoje.getFullYear();
           
            document.getElementById('resultadoTempo').value=diaAmanha.getDate()+"/"+mesHoje.getMonth()+"/"+diaAmanha.getFullYear();    
            
            document.getElementById('tempo2').value=addZero(horaHoje.getHours())+":"+addZero(minutosHoje.getMinutes());

            document.getElementById('resultadoTempo2').value=addZero(HoraAmanha.getHours())+":"+addZero(minutosHoje.getMinutes());
            $("#tempo").show();                       
            $("#tempo2").show(); 
            $("#resultadoTempo").show();
            $("#resultadoTempo2").show(); 
            $("#escritaDiaEntrada").show();
            $("#escritaHoraEntrada").show(); 
            $("#escritaDiaSaida").show();
            $("#escritaHoraSaida").show(); 
            $("#botao").show();      
			$('#servicos').val("Horista");
        }
        if($(this).val() == "nada")
        {           
            $("#servicos").hide();    
            $("#tempo").val("");
            $("#tempo2").val(""); 
            $("#resultadoTempo").val("");
            $("#resultadoTempo2").val("");
            $("#escritaDiaEntrada").val("");
            $("#escritaHoraEntrada").val("");
            $("#escritaDiaSaida").val("");
            $("#escritaHoraSaida").val("");

        }
            });
                      $("#servicos").hide();
});

