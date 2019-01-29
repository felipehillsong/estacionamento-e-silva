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
            function diaAtual(dias){
                var diaHoje        = new Date();
                var dataHoje    = new Date(diaHoje.getTime() + (dias * 24 * 60 * 60 * 1000));
                return dataHoje.getDate() + "/" + (dataHoje.getMonth() + 1) + "/" + dataHoje.getFullYear();
            }
            var horaHoje = new Date();
            var minutosHoje = new Date();
            
            var novoDia = diaAtual(0);  

            function adicionarDiasData(dias){
                var mesAmanha        = new Date();
                var dataVenc    = new Date(mesAmanha.getTime() + (dias * 24 * 60 * 60 * 1000));
                return dataVenc.getDate() + "/" + (dataVenc.getMonth() + 1) + "/" + dataVenc.getFullYear();
            }
            
            var novaData = adicionarDiasData(30);                
            
            function addZero(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
            
            document.getElementById('tempo').value=novoDia;
           
            document.getElementById('resultadoTempo').value=novaData;

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
            function diaAtual(dias){
                var diaHoje        = new Date();
                var dataHoje    = new Date(diaHoje.getTime() + (dias * 24 * 60 * 60 * 1000));
                return dataHoje.getDate() + "/" + (dataHoje.getMonth() + 1) + "/" + dataHoje.getFullYear();
            }
            var horaHoje = new Date();
            var minutosHoje = new Date();
            
            var novoDia = diaAtual(0);  

            function adicionarDiasData(dias){
                var diaAmanha        = new Date();
                var dataVenc    = new Date(diaAmanha.getTime() + (dias * 24 * 60 * 60 * 1000));
                return dataVenc.getDate() + "/" + (dataVenc.getMonth() + 1) + "/" + dataVenc.getFullYear();
            }
            
            var novaData = adicionarDiasData(1);       
            
            function addZero(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }
            
            document.getElementById('tempo').value=novoDia;
           
            document.getElementById('resultadoTempo').value=novaData;
            
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
            function diaAtual(dias){
                var diaHoje        = new Date();
                var dataHoje    = new Date(diaHoje.getTime() + (dias * 24 * 60 * 60 * 1000));
                return dataHoje.getDate() + "/" + (dataHoje.getMonth() + 1) + "/" + dataHoje.getFullYear();
            }
            var horaHoje = new Date();
            var minutosHoje = new Date();
            var horaAmanha = new Date();
            
            var novoDia = diaAtual(0);  

            function adicionarDiasData(dias){
                var diaAmanha        = new Date();                
                var dataVenc    = new Date(diaAmanha.getTime() + (dias * 24 * 60 * 60 * 1000));
                return dataVenc.getDate() + "/" + (dataVenc.getMonth() + 1) + "/" + dataVenc.getFullYear();
            }
            
            var novaData = adicionarDiasData(0);  
            horaAmanha.setHours(horaAmanha.getHours()+1);        
            
            function addZero(i) {
                if (i < 10) {
                  i = "0" + i;
                }
                return i;
              }   
            
            
            document.getElementById('tempo').value=novoDia;
           
            document.getElementById('resultadoTempo').value=novaData;
            
            document.getElementById('tempo2').value=addZero(horaHoje.getHours())+":"+addZero(minutosHoje.getMinutes());

            document.getElementById('resultadoTempo2').value=addZero(horaAmanha.getHours())+":"+addZero(minutosHoje.getMinutes());
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

