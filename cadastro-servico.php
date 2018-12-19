<?php
require 'config.php';
session_start();
include_once("header.php");
if (empty($_SESSION['start'])) {
    header("Location:login.php");
}
?>
                    <div class="container">                    
                    <form class="formCadastrando-Servico">
                    <h2>Cadastrar Serviços</h2>
                    <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-7">
                       <h6>Cliente</h6><input type="text" class="form-control" disabled value="<?php echo $_SESSION['nome']; ?>">
                    </div>
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <h6>Placa</h6><input type="text" class="form-control" disabled value="<?php echo $_SESSION['placa']; ?>">
                    </div>                   
                    </div>
                    </form>

</div>   
</body>
</html>