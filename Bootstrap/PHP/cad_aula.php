<?php
session_start();
include 'database.php';

    if(isset($_POST['agendar'])){
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
        $instrutor = filter_input(INPUT_POST, 'instrutor', FILTER_SANITIZE_STRING);
        $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
        $aluno = filter_input(INPUT_POST, 'aluno', FILTER_SANITIZE_STRING);
        $data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
        $hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
        $pago = filter_input(INPUT_POST, 'pago', FILTER_SANITIZE_STRING);
        $veiculo = filter_input(INPUT_POST, 'veiculo', FILTER_SANITIZE_STRING);

        /*if(empty($instrutor) || empty($cpf) || empty($aluno) || empty($data) || empty($hora) || empty($pago) || empty($veiculo)){
            echo"<script>
                    alert('Algum campo ainda está em branco!');
                </script>";
            exit;
        }*/

        if(!empty($id)){
            $queryDB = "UPDATE `aula` SET `data` = ?, `hora` = ?, `instrutor` = ?, `aluno` = ?, `veiculo` = ?, `pago` = ?, `cpf` = ? WHERE `idaula` = ?;";
            $declaracao = $conexao -> prepare($queryDB);
            $declaracao -> bind_param("sssssssi", $data, $hora, $instrutor, $aluno, $veiculo, $pago, $cpf, $id);

            if ($declaracao -> execute()){
                header("Location: ../HTML/tabelaAula.php?message:Atualizado com sucesso!");
                
                /*
                echo "<script>
                        alert('Aula cadastrada com sucesso!');
                        window.location.href = '../HTML/cadastrarAula.php';
                    </script>;";
                */
            }
            else{
                //header("Location: ../")
            }
        }

        else{
            $declaracaoBD = $conexao -> prepare("INSERT INTO `aula`(`data`,`hora`,`instrutor`,`aluno`,`veiculo`,`pago`,`cpf`) VALUES (?,?,?,?,?,?,?)");
            $declaracaoBD -> bind_param("sssssss", $data, $hora, $instrutor, $aluno, $veiculo, $pago, $cpf);
            
            if ($declaracaoBD -> execute()){
                echo "<script>
                        alert('Aula cadastrada com sucesso!');
                        window.location.href = '../HTML/cadastrarAula.php';
                    </script>;";
            }
            else{
                echo "Erro ao cadastrar a aula: ". $declaracaoBD->error;
            }
        }
    }
?>