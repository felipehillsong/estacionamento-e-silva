<?php
require 'config.php';
session_start();
include_once("header.php");
if(empty($_SESSION['start'])){
    header("Location:login.php");
}

if(isset($_POST['button-pesquisa-servico'])){
    $id = $_POST['id'];
    $sql = $pdo->prepare("SELECT * FROM historico WHERE id = :id");
    $sql->bindValue(":id", $id);
    $sql->execute();
    if($sql->rowCount() > 0){
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        //Nesse caso o foreach esta percorrendo todas as linhas do resultado pois o array é bidimenssional. Ai os resultados sao guardados em $data, ai depois eu passei para a variavel $cliente
        foreach($sql as $data)
        {
            $ticket = $data;               
        }    
            $_SESSION['id'] = $ticket['id'];
            $_SESSION['servico'] = $ticket['servico'];
            $_SESSION['nome'] = $ticket['nome'];
            $_SESSION['veiculo'] = $ticket['veiculo'];
            $_SESSION['placa'] = $ticket['placa'];  
            $_SESSION['data_entrada'] = $ticket['data_entrada'];
            $_SESSION['hora_entrada'] = $ticket['hora_entrada'];
            $_SESSION['data_saida'] = $ticket['data_saida'];
            $_SESSION['hora_saida'] = $ticket['hora_saida'];
            
    }else{
        echo "Erro";
    }
}        
?>
        <div class="formularioPesquisaServico">
        <form method="POST" id="formPesquisaServicos">
            <h2>Pesquisa de Serviço</h2>
            <input type="text" name="id" placeholder="Número do Serviço" class="form-control" required><br/>
            <div id="button-pesquisa-servico">
            <button class="btn" type="submit" name="button-pesquisa-servico" id="pesquisaServiço">Enviar</button>
            </div>
        </form>
</div> 
<div id="resultadoPesquisa">   
<div class="container">
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
    <div><br>
      <input type="text" class="form-control text-center" readonly value="<?php echo $_SESSION['servico']; ?>"/>   <br>       
      <h6 class="text-center">TIPO DE SERVIÇO</h6>
        <input type="text" class="form-control text-center" readonly value="<?php echo $_SESSION['id']; ?>"/>
        <h6 class="text-center">NUMERO DO SERVIÇO</h6>
    </div>  
    </div><br/>                      
    </div>   <br>          
    <div class="container">
<div class="row">
    <div class="col-sm-4">   
    <input type="text" class="form-control" readonly id="tempo" value="<?php echo $_SESSION['data_entrada']; ?>"/>
    <h6 id="escritaDiaEntrada">DIA DA ENTRADA</h6>
    </div>
    <div class="col-sm-4">    
    <input type="text" class="form-control" readonly id="tempo2" value="<?php echo $_SESSION['hora_entrada']; ?>" />
    <h6 id="escritaHoraEntrada">HORA DA ENTRADA</h6>
    </div>     
    <div>
</div>
    <div class="container"><br><br>
<div class="row">
    <div class="col-sm-4">   
    <input type="text" class="form-control" readonly id="resultadoTempo" value="<?php echo $_SESSION['data_saida']; ?>"/>
    <h6 id="escritaDiaSaida">DIA DA SAÍDA</h6>
    </div>
    <div class="col-sm-4">    
    <input type="text" class="form-control" readonly id="resultadoTempo2" value="<?php echo $_SESSION['hora_saida']; ?>" />
    <h6 id="escritaHoraSaida">HORA DA SAÍDA</h6><br>
    </div>  
    </div>
    </div>
</body>
</html>