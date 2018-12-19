<?php
require 'config.php';
session_start();
include_once("header.php");

if(empty($_SESSION['start'])){
    header("Location:login.php");
}

if(isset($_POST['btn_pesquisa_para_servico_nome'])){
    $nome = $_POST['nome'];
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE nome = :nome");
    $sql->bindValue(":nome", $nome);
    $sql->execute();
    if($sql->rowCount() > 0){
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        //Nesse caso o foreach esta percorrendo todas as linhas do resultado pois o array é bidimenssional. Ai os resultados sao guardados em $data, ai depois eu passei para a variavel $cliente
        foreach($sql as $data)
        {
            $cliente = $data;
        }         
            
    }else{
        $cliente['nome'] = "Usuário Inexistente!";         
    }   

    $_SESSION['nome'] = $nome;   

}

if(isset($_POST['btn_pesquisa_para_servico_placa'])){
    $placa = $_POST['placa'];
    $sql = $pdo->prepare("SELECT * FROM cadastro WHERE placa = :placa");
    $sql->bindValue(":placa", $placa);
    $sql->execute();
    if($sql->rowCount() > 0){
        $sql = $sql->fetchAll(PDO::FETCH_ASSOC);
        //Nesse caso o foreach esta percorrendo todas as linhas do resultado pois o array é bidimenssional. Ai os resultados sao guardados em $data, ai depois eu passei para a variavel $cliente
        foreach($sql as $data)
        {
            $cliente = $data;           
        }    
         
    }else{
        $cliente['placa'] = "Usuário Inexistente!";             
    }  
    $_SESSION['placa'] = $placa;       
} 
?>
        <div class="formularioServico">
        <div class="container">
            <form method="POST" id="formCadastroServico">
                <h2>Serviço</h2>
                <!-- criamos a row, ela esta separando a div em 12 colunas -->
                <div class="row">
                <!-- fazemos col-sm-8 col-md-10 col-lg-7 por exemplo para deixar um tamanho fixo para cada tipo de monitor, o input tera esses tamanhos quando começar a diminuir a tela -->
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="nome" placeholder="Nome do cliente" class="form-control">
                    </div>
                    <!-- o botão tera esse tamanho quando começar a diminuir a tela -->
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="submit" name="btn_pesquisa_para_servico_nome">Pesquisar</button>
                    </div>

                </div><br/>
                <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="placa" placeholder="Placa do veiculo" class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="submit" name="btn_pesquisa_para_servico_placa">Pesquisar</button><br/><br/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="pesquisa1" placeholder="Resultado" class="form-control" id="input1" disabled value="<?php echo isset($cliente['nome']) ? $cliente['nome'] : '' ; //se o nome foi setado o nome vai imprimir se nao vai imprimir nome inexistente, o nome inexistente foi definido la em cima nos codigos php?>">
                    </div>
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="pesquisa" placeholder="Resultado" class="form-control" id="input2" disabled value="<?php echo isset($cliente['cpf']) ? $cliente['cpf'] : '' ; //se o nome foi setado o nome vai imprimir se nao vai imprimir nome inexistente, o nome inexistente foi definido la em cima nos codigos php?>">
                    </div>
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="pesquisa" placeholder="Resultado" class="form-control" id="input3" disabled value="<?php echo isset($cliente['telefone']) ? $cliente['telefone'] : '' ; //se o nome foi setado o nome vai imprimir se nao vai imprimir nome inexistente, o nome inexistente foi definido la em cima nos codigos php?>">
                    </div>
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="pesquisa" placeholder="Resultado" class="form-control" id="input4" disabled value="<?php echo isset($cliente['veiculo']) ? $cliente['veiculo'] : '' ; //se o nome foi setado o nome vai imprimir se nao vai imprimir nome inexistente, o nome inexistente foi definido la em cima nos codigos php?>">
                    </div>
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="pesquisa" placeholder="Resultado" class="form-control" id="input5" disabled value="<?php echo isset($cliente['placa']) ? $cliente['placa'] : '' ; //se o nome foi setado o nome vai imprimir se nao vai imprimir nome inexistente, o nome inexistente foi definido la em cima nos codigos php?>">
                    </div>
                    <!-- o botão tera esse tamanho quando começar a diminuir a tela -->
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="button" id="button" name="btn_pesquisa_para_servico">Serviço</button>
                    </div>

            </form>
        </div>
        </div>
</body>
</html>