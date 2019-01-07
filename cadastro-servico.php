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
     <label for="servico"></label>
     <select class="form-control form-control-lg" name="servico" id="servico">
    <option value="nada" class="nada">Selecione o Serviço</option>
    <option value="Mensalista">Mensalista</option>
    <option value="Diarista">Diarista</option>
    <option value="Horista">Horista</option>
    </select><br/>    
    <div><br>
        <input type="text" class="form-control" readonly name="servicos" id="servicos" />
    </div><br/>                           
    </div>    
       
    <div class="container" id="cadastrandoone">
<div class="row">
    <div class="col-sm-4">   
    <input type="text" class="form-control" readonly id="tempo" />
    <h6>DIA DA ENTRADA</h6>
    </div>
    <div class="col-sm-4">    
    <input type="time" class="form-control" id="tempo2" />
    <h6>HORA DA ENTRADA</h6>
    </div>
    <div class="col-sm-2">
    <div id="button-cadastro-servico">
    <button class="btn" type="submit" name="btn_cadastro-servico">Salvar</button>   
    </div>  
    </div>
    </form>
    <div>
</body>
</html>