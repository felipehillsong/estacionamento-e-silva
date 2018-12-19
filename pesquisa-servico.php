<?php
require 'config.php';
session_start();
include_once("header.php");
if(empty($_SESSION['start'])){
    header("Location:login.php");
}
?>
        <div class="formularioPesquisaServico">
        <form method="POST" id="formPesquisaServicos">
            <h2>Pesquisa de Serviço</h2>
            <input type="text" name="nome" placeholder="Número do Serviço" class="form-control" required><br/><br/>
            <button class="btn" type="submit">Enviar</button>
        </form>
</div>
    </body>
</html>