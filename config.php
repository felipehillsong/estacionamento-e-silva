<?php
try{
    $pdo = new PDO("mysql:dbname=estacionamento;host=localhost", "root", "");
}catch(PDOException $e){
    echo "Erro".$e->getMessage();
}
?>