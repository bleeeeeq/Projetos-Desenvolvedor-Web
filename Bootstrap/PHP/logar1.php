<?php
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
        // Código de login, quando for feito
    }
}

if ($error_message) {
    echo "<script>alert('$error_message'); window.history.back();</script>";
}
?>
