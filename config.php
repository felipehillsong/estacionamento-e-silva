<?php
try{
    $pdo = new PDO("mysql:dbname=felipe_2;host=localhost", "root", "");
}catch(PDOException $e){
    echo "Erro".$e->getMessage();
}
?>