<?php
require 'config.php';
session_start();
if(empty($_SESSION['start'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Login Estacionamento</title>

    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/scriptHome.js"></script>
</head>

<body class="home">
    <div class="menuHome">
        <h1>HOME</h1>
        <button class="cadastro">Cadastro de Clientes</button><br><br>
        <button class="ticket">Ticket</button><br><br>
        <button>Pesquisa de Clientes/Veículos</button><br><br>
        <button>Pesquisa de Ticket</button><br><br>
        <a href="sair.php"><button>Sair</button></a>
    </div>
    <div class="formularioHome">
        <form id="formCadastro">
            <h2>Clientes</h2>
            <input type="text" name="name" placeholder="Nome">
            <input type="text" name="cpf" placeholder="CPF">
            <input type="text" name="telefone" placeholder="Telefone">
            <input type="text" name="veiculo" placeholder="Veículo">
            <input type="text" name="placa" placeholder="Placa">
            <button type="submit">Enviar</button>
        </form>
        <form id="formCadastroTicket">
            <h2>Ticket</h2>
            <input type="text" name="name" placeholder="name">
            <input type="text" name="telefone" placeholder="telefone">
            <input type="text" name="endereco" placeholder="endereco">
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>