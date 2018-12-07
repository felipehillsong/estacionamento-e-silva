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

    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/scriptHome.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</head>

<body class="home">
        <nav class="site-header sticky-top py-1">
                <div class="container d-flex flex-column flex-md-row justify-content-between">
                  <a class="py-2" href="#">
                  </a>
                  <a class="py-2 d-none d-md-inline-block cadastro" href="#">Cadastro de Clientes</a>
                  <a class="py-2 d-none d-md-inline-block ticket" href="#">Serviços</a>
                  <a class="py-2 d-none d-md-inline-block" href="#">Pesquisa de Clientes</a>
                  <a class="py-2 d-none d-md-inline-block" href="#">Pesquisa de Serviços</a>
                  <a class="py-2 d-none d-md-inline-block" href="sair.php">Sair</a>

                </div>
              </nav>
        </div>
    </div>
    </div>
    <div class="formularioHome">
        <form id="formCadastro">
            <h2>Clientes</h2>
            <input type="text" name="name" placeholder="Nome" class="form-control">
            <input type="text" name="cpf" placeholder="CPF" class="form-control">
            <input type="text" name="telefone" placeholder="Telefone" class="form-control">
            <input type="text" name="veiculo" placeholder="Veículo" class="form-control">
            <input type="text" name="placa" placeholder="Placa" class="form-control"><br/><br/ >
            <button class="btn" type="submit">Enviar</button>
        </form>
        <form id="formCadastroTicket">
            <h2>Serviço</h2>
            <input type="text" name="name" placeholder="Cliente" class="form-control">
            <input type="text" name="telefone" placeholder="Veículo" class="form-control">
            <input type="text" name="endereco" placeholder="Modalidade" class="form-control"><br/><br/>
            <button class="btn" type="submit">Enviar</button >
        </form>
    </div>
</body>

</html>

