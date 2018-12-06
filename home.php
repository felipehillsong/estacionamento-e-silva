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
    <script src="main.js"></script>
</head>
<body>
<div class="menuHome">
<h1>HOME</h1>
<button>Cadastro de Clientes</button><br><br>
<button>Ticket</button><br><br>
<button>Pesquisa de Clientes/Veículos</button><br><br>
<button>Pesquisa de Ticket</button><br><br>
<a href="sair.php"><button>Sair</button></a>
</div>
</body>
</html>