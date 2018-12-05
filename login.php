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
    header("Location: index.php");

}else{
    echo "Usuário ou senha errados!";
}

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login Estacionamento</title>

    <link rel="stylesheet" type="text/css" href="assets/style.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="h1Login"><br/><br/><br/>
    <h1>ESTACIONAMENTO E SILVA</h1>
    </div>
    <form method="POST"><br/><br/><br/><br/><br/><br/><br/><br/><br/>
    Nome<br/>
    <input required type="text" name="nome" placeholder="Digite seu nome" class="formularioLogin"/><br/><br/>

    Email<br/>
    <input required type="email" name="email" placeholder="Digite seu email" class="formularioLogin"/><br/><br/>

    Senha<br/>
    <input required type="password" name="senha" placeholder="Digite sua senha"  class="formularioLogin"/><br/><br/>

    <input type="submit" value="Entrar" class="formularioLogin"/>
    </form>

</body>
</html>
