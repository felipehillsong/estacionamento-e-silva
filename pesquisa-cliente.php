<?php
require 'config.php';
session_start();
include_once("header.php");

if(empty($_SESSION['start'])){
    header("Location:login.php");
}
?>
        <div class="formularioPesquisaCliente">
        <form method="POST" id="formPesquisaClientes">
            <h2>Pesquisa de Cliente</h2>
            <input type="text" name="nome" placeholder="Nome" class="form-control" required>
            <input type="text" name="cpf" placeholder="CPF" class="form-control" required>
            <input type="text" name="veiculo" placeholder="Veículo" class="form-control" required>
            <input type="text" name="placa" placeholder="Placa" class="form-control"><br/><br/>
            <button class="btn" type="submit">Enviar</button>
        </form>
        </div>
    </body>
</html>
