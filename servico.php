<?php
require 'config.php';
session_start();
include_once("header.php");

if(empty($_SESSION['start'])){
    header("Location:login.php");
}

if(isset($_POST['btn_pesquisa_para_servico'])){
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
        $cliente['nome'] = "Usuário inexistente!";
    }
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
                        <button class="btn" type="submit" name="btn_pesquisa_para_servico">Pesquisar</button>
                    </div>

                </div><br/>
                <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="placa" placeholder="Placa do veiculo" class="form-control">
                    </div>
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="submit">Pesquisar</button><br/><br/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8 col-md-10 col-lg-7">
                        <input type="text" name="pesquisa" placeholder="Resultado" class="form-control" value="<?php echo isset($cliente['nome']) ? $cliente['nome'] : '' ; //se o nome foi setado o nome vai imprimir se nao vai imprimir nome inexistente, o nome inexistente foi definido la em cima nos codigos php?>">
                    </div>
                    <!-- o botão tera esse tamanho quando começar a diminuir a tela -->
                    <div class="col-sm-4 col-md-2 col-lg-5">
                        <button class="btn" type="submit" name="btn_pesquisa_para_servico">Serviço</button>
                    </div>

            </form>
        </div>
        </div>
</body>
</html>