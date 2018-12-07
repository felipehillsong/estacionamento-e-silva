$(document).ready(function() {

    $( ".cadastro" ).click(function() {
        $('#formCadastro').show();
        $('#formCadastroServico').hide();
        $('#formPesquisaClientes').hide();
        $('#formPesquisaServicos').hide();
    });

    $( ".servico" ).click(function() {
        $('#formCadastro').hide();
        $('#formCadastroServico').show();
        $('#formPesquisaClientes').hide();
        $('#formPesquisaServicos').hide();
    });

    $( ".pesquisaClientes" ).click(function() {
        $('#formCadastro').hide();
        $('#formCadastroServico').hide();
        $('#formPesquisaClientes').show();
        $('#formPesquisaServicos').hide();
    });

    $( ".pesquisaServicos" ).click(function() {
        $('#formCadastro').hide();
        $('#formCadastroServico').hide();
        $('#formPesquisaClientes').hide();
        $('#formPesquisaServicos').show();
    });
});