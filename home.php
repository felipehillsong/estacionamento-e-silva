<?php
require 'config.php';
session_start();
if(empty($_SESSION['start'])){
    header("Location:login.php");
}
?>
<h1>ENTREI NO SISTEMA</h1>
<a href="sair.php">Sair</a>
