<?php
require 'config.php';
session_start();
include_once("header.php");
if(empty($_SESSION['start'])){
    header("Location:login.php");
}
?>
<h2>Cadastrar Serviços</h2>
    
</body>
</html>