<?php
session_start();
include 'database.php';

    $id = '';
    $instrutor = '';
    $cpf = '';
    $aluno = '';
    $data = '';
    $hora = '';
    $paga = '';
    $carro = '';







    // Consulta para buscar pelo nome do instrutor
    $stmt = $conexao->prepare("SELECT aluno, data, hora, pago, veiculo from aula where instrutor = ?");
    $stmt -> bind_param("s", $buscar_instrutor);
    $stmt -> execute();
    $stmt -> store_result();

    if($stmt -> num_rows > 0){
        $stmt -> bind_result ($aluno, $data, $hora, $pago, $veiculo);
        $stmt -> fetch();
        $_SESSION['aluno'] = $aluno;
        $_SESSION['data'] = $data;
        $_SESSION['hora'] = $hora;
        $_SESSION['pago'] = $pago;
        $_SESSION['veiculo'] = $veiculo;
        header("Location: ../HTML/cadastraAula.php");
    }

    else{
        echo "<script>
        alert ('Instrutor não encontrado!')
        window.location.href '../HTML/cadastraAula.php'
        </script>";
    }

?>