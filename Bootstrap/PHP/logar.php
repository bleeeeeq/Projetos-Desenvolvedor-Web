<?php
session_start();
include 'database.php';
$error_message = '';

if (isset($_POST['logar'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if (strlen($email) == 0) {
        $error_message = 'Preencha o campo email.';
    } 

    else if (strlen($senha) == 0) {
        $error_message = 'Preencha o campo senha.';
    } 

    else {
        $stmt = $conexao -> prepare ('select nome, idusuario from usuario where email = ? and senha = ?');
        $stmt -> bind_param("ss", $email, $senha);
        $stmt -> execute();
        $result = $stmt -> get_result();

        if ($result -> num_rows == 1){
            $usuario = $result -> fetch_assoc();
            $_SESSION ['id'] = $usuario ['idusuario'];
            $_SESSION ['nome'] = $usuario ['nome'];
            echo "<script>
                alert ('Usuário verificado com sucesso! Bem vindo ao sistema, ".$usuario['nome']."!')
                window.location.href='../HTML/bemVindo.php'
            </script>";
            exit;
        }

        else{
            echo "<script>
            alert ('Email ou senha incorretos. Tente novamente.')
            window.location.href='../HTML/login.html'
        </script>";
            exit;
        }
    }
}

if ($error_message) {
    echo "<script>alert('$error_message'); window.history.back();</script>";
}
?>
