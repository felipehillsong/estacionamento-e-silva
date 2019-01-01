<?php
require 'config.php';
session_start();
include_once("header.php");
if (empty($_SESSION['start'])) {
    header("Location:login.php");
}
if(isset($_POST['servico'])){
    $servico = $_POST['servico'];

    if($servico == 'Mensalista'){
    $sql = $pdo->prepare("INSERT INTO historico (servico) VALUES (:servico)");
    $sql->bindValue(":servico", $servico);    
    $sql->execute();  
    }else{
        echo "Outra coisa";
    }
   
}
?>
<div class="container" id="cadastrandoone">
<div class="row">
    <div class="col-sm-4">
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
    <div class="col-sm-4">
    <h2>Cadastrar Serviços</h2>
     <form method="POST">
     <select class="form-control form-control-lg" name="servico">
    <option>Selecione o Serviço</option>
    <option value="Mensalista">Mensalista</option>
    <option value="Diarista">Diarista</option>
    <option value="Horista">Horista</option>
    </select><br/>
    <div id="button-cadastro-servico">
    <button class="btn" type="submit" name="btn_cadastro-servico">Serviço</button>   
    </div>
    </form>    <br/>
    <div>
        <input type="text" class="form-control" readonly name="servico" />
    </div>                      
    </div> 
   

</body>
</html>