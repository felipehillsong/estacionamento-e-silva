$(document).ready(function() {

    $( ".cadastro" ).click(function() {
        $('#formCadastro').show();
        $('#formCadastroTicket').hide();
    });

    $( ".ticket" ).click(function() {
        $('#formCadastro').hide();
        $('#formCadastroTicket').show();
    });
});

