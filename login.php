<?php
require 'config.php';
session_start();

if(!empty($_POST['email']) && !empty($_POST['senha'])){
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
$sql->bindValue(":email", $email);
$sql->bindValue(":senha", $senha);
$sql->execute();

if($sql->rowCount() > 0){
    $sql = $sql->fetch();
    $_SESSION['start'] = $sql;
    header("Location: cadastro.php");

}else{?>
    <div class="container">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <?php echo "Usuário ou senha errados!"; ?>
    <button class="close" data-dismiss="alert" aria-label="fechar">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    </div>
    <?php    
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
<body class="bodyLogin text-center">
    <div class="h1Login"><br/><br/><br/>
    <h1>ESTACIONAMENTO E SILVA</h1>
    </div>
    <form method="POST" class="form-signin">
    <h2>Entre com seu login:</h2>
    <input required type="text" name="nome" placeholder="Digite seu nome" class="formularioLogin form-control" /><br/><br/>

    <input required type="email" name="email" placeholder="Digite seu email" class="formularioLogin form-control"/><br/><br/>

    <input required type="password" name="senha" placeholder="Digite sua senha"  class="formularioLogin form-control"/><br/><br/>


    <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>

</body>
</html>
