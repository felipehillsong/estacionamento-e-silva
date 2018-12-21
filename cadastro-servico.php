<?php
require 'config.php';
session_start();
include_once("header.php");
if (empty($_SESSION['start'])) {
    header("Location:login.php");
}
?>
     <div class="container-fluid">   
     <div id="cadastrandoone">
     <h2>Cadastrar Serviços</h2>
     <form>
     <select class="form-control form-control-lg">
    <option>Selecione o Serviço</option>
    <option>Mensalista</option>
    <option>Diarista</option>
    <option>Horista</option>
    </select>    
    </form>
     </div>   
     <div class="container">                 
     <form class="formCadastrando-Servico">    
     <div class="row">
     <div class="col-sm-8 col-md-10 col-lg-7">
     <h6 class="cadastroServicoCenter">Cliente</h6><input type="text" class="form-control" readonly value="<?php echo $_SESSION['nome']; ?>">
     </div>
     <div class="col-sm-8 col-md-10 col-lg-7">
     <h6 class="cadastroServicoCenter">Veículo</h6><input type="text" class="form-control" readonly value="<?php echo $_SESSION['veiculo']; ?>">
     </div>    
     <div class="col-sm-8 col-md-10 col-lg-7">
     <h6 class="cadastroServicoCenter">Placa</h6 ><input type="text" class="form-control" readonly value="<?php echo $_SESSION['placa']; ?>">
     </div>                
     </div>
     </div>     
</div>

</body>
</html>