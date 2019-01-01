<?php
require 'config.php';
session_start();
include_once("header.php");

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
    ?>
    <div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo "Usuário cadastrado com sucesso!"; ?>
    <button class="close" data-dismiss="alert" aria-label="fechar">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    <?php  
    

    }else{?>
        <div class="container">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo "Usuário ja Cadastrado!"; ?>
        <button class="close" data-dismiss="alert" aria-label="fechar">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
        <?php        
    }    
}
?>
        <div class="formularioCadastro">
        <form method="POST" id="formCadastro">
            <h2>Cadastro</h2>
            <input type="text" name="nome" placeholder="Nome" class="form-control" required>
            <input type="text" name="cpf" placeholder="CPF" class="form-control" required>
            <input type="text" name="telefone" placeholder="Telefone" class="form-control" required>
            <input type="text" name="veiculo" placeholder="Veículo" class="form-control" required>
            <input type="text" name="placa" placeholder="Placa" class="form-control" required><br/><br/>
            <div id="button-cadastro">
            <button class="btn" type="submit" name="cadastro_cliente">Enviar</button>
            </div>
        </form>
        </div>

    </body>

</html>