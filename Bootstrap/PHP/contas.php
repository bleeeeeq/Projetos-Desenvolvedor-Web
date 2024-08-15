<?php
include 'database.php';
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tipo = filter_input(INPUT_POST, 'tipo' , FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao' , FILTER_SANITIZE_STRING);
    $data = filter_input(INPUT_POST, 'data' , FILTER_SANITIZE_STRING);
    $valor = filter_input(INPUT_POST, 'valor' , FILTER_SANITIZE_NUMBER_FLOAT);

    
        $declaracao = $conexao->prepare("INSERT INTO `despesas`(`tipo`,`descricao`,`data`,`valor`) VALUES (?,?,?,?)");

        $declaracao->bind_param("sssf", $tipo, $descricao, $data, $valor);
        if ($declaracao->execute()){
            echo" <script>
                alert('Despesa cadastrada com sucesso');
                 window.location.href ='../HTML/despesas.php'
            </script>";
        }

        else{
            echo "Erro ao cadastrar uma nova despesa: " . $declaracao->error;
        }
    
}
?>