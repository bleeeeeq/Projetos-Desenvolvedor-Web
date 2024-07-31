<?php
    include 'database.php';
    $sql = "select * from aula";

    if(isset($_POST['instrutor']) || isset ($_POST['nome_aluno'])){
        $instrutor = $_POST['instrutor'];
        $aluno = $_POST['nome_aluno'];
    }
?>