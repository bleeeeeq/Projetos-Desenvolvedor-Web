<?php
    include 'database.php';

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
    $sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);

    

    $salvar = "INSERT INTO `usuario`(`nome`,`sobrenome`,`sexo`,`email`,`senha`,`endereco`,`cidade`,`estado`)VALUES('$nome','$sobrenome','$sexo', '$email', '$senha', '$endereco', '$cidade', '$estado')";

    $resultado = mysqli_query($conexao,$salvar);

    if ($resultado){
        echo "<script>
            window.location.href = '../HTML/cadastro.html?status=success';
        </script>";
    }
    else{
        echo "<script>
            window.location.href = '../HTML/cadastro.html?status=error';
        </script>";
    }
?>