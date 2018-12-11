<?php
require 'config.php';
session_start();
if(empty($_SESSION['start'])){
    header("Location:login.php");
}

if(isset($_POST['cadastro_cliente'])){
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $veiculo = $_POST['veiculo'];
    $placa = $_POST['placa'];

    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE nome = :nome AND cpf = :cpf AND telefone = :telefone AND veiculo = :veiculo AND placa = :placa");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":cpf", $cpf);
    $sql->bindValue(":telefone", $telefone);
    $sql->bindValue(":veiculo", $veiculo);
    $sql->bindValue(":placa", $placa);
    $sql->execute();

    if($sql->rowCount() == 0){
    $sql = $pdo->prepare("INSERT INTO cadastro (nome, cpf, telefone, veiculo, placa) VALUES (:nome, :cpf, :telefone, :veiculo, :placa)");
    $sql->bindValue(":nome", $nome);
    $sql->bindValue(":cpf", $cpf);
    $sql->bindValue(":telefone", $telefone);
    $sql->bindValue(":veiculo", $veiculo);
    $sql->bindValue(":placa", $placa);
    $sql->execute();
    }else{
        echo "Usuário ja cadastrado!";
    }
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
                  <a class="py-2 d-none d-md-inline-block servico" href="#">Serviços</a>
                  <a class="py-2 d-none d-md-inline-block pesquisaClientes" href="#">Pesquisa de Clientes</a>
                  <a class="py-2 d-none d-md-inline-block pesquisaServicos" href="#">Pesquisa de Serviços</a>
                  <a class="py-2 d-none d-md-inline-block" href="sair.php">Sair</a>

                </div>
              </nav>
        </div>
    </div>
    </div>
    <div class="formularioHome">
        <form method="POST" id="formCadastro">
            <h2>Cadastro</h2>
            <input type="text" name="nome" placeholder="Nome" class="form-control" required>
            <input type="text" name="cpf" placeholder="CPF" class="form-control" required>
            <input type="text" name="telefone" placeholder="Telefone" class="form-control" required>
            <input type="text" name="veiculo" placeholder="Veículo" class="form-control" required>
            <input type="text" name="placa" placeholder="Placa" class="form-control" required><br/><br/>
            <button class="btn" type="submit" name="cadastro_cliente">Enviar</button>
        </form>
        <!--criamos o container para selecionar a div que queremos -->
        <div class="container">
            <form method="POST" id="formCadastroServico">
                <h2>Serviço</h2>
                <!-- criamos a row, ela esta separando a div em 12 colunas -->
                <div class="row">
                <!-- fazemos col-sm-8 col-md-10 col-lg-7 por exemplo para deixar um tamanho fixo para cada tipo de monitor, o input tera esses tamanhos quando começar a diminuir a tela -->
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="nome" placeholder="Nome do cliente" class="form-control">
                    </div>
                    <!-- o botão tera esse tamanho quando começar a diminuir a tela -->
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="submit">Pesquisar</button>
                    </div>
                </div><br/>
                <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="nome" placeholder="Placa do veiculo" class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="submit">Pesquisar</button>
                    </div>
                </div>
            </form>
        </div>
        <form method="POST" id="formPesquisaClientes">
            <h2>Pesquisa de Cliente</h2>
            <input type="text" name="nome" placeholder="Nome" class="form-control" required>
            <input type="text" name="cpf" placeholder="CPF" class="form-control" required>
            <input type="text" name="veiculo" placeholder="Veículo" class="form-control" required>
            <input type="text" name="placa" placeholder="Placa" class="form-control"><br/><br/>
            <button class="btn" type="submit">Enviar</button>
        </form>
        <form method="POST" id="formPesquisaServicos">
            <h2>Pesquisa de Serviço</h2>
            <input type="text" name="nome" placeholder="Número do Serviço" class="form-control" required><br/><br/>
            <button class="btn" type="submit">Enviar</button>
        </form>

    </div>
</body>

</html>

