<?php
include 'database.php';

    if(isset($_POST['btnCad'])){ 
    $nome = filter_input(INPUT_POST, 'nome' , FILTER_SANITIZE_STRING);
    $cpf = filter_input(INPUT_POST, 'cpf' , FILTER_SANITIZE_STRING);
    $celular = filter_input(INPUT_POST, 'celular' , FILTER_SANITIZE_STRING);
    $whatsapp = filter_input(INPUT_POST, 'whatsapp' , FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, 'categoria' , FILTER_SANITIZE_STRING);
        
        if(empty($nome) || empty($cpf) || empty($celular) || empty($whatsapp) || empty($email) || empty($categoria)){
            echo"<script>
                    alert('Preencha todos os campos!!!');
                    window.location.href ='../HTML/cad_aluno.html;'
                </script>";
            exit;
        }

        $declaracao=$conexao->prepare("select cpf from cadaluno where cpf = ?");
        $declaracao->bind_param("s",$cpf);
        $declaracao->execute();
        $declaracao->store_result();
        
        if($declaracao->num_rows>0){
            echo"<script>
                  alert('Esse CPF já foi cadastrado no sistema!!!');
                  window.location.href ='../HTML/cad_aluno.html;'
                </script>";
             $declaracao->close();
            }

        //$stmt
        $declaracao = $conexao->prepare("INSERT INTO `cadaluno`(`nome`,`cpf`,`celular`,`whatsapp`,`email`,`categoria`) VALUES (?,?,?,?,?,?)");

        $declaracao->bind_param("ssssss", $nome, $cpf, $celular, $whatsapp, $email, $categoria);
        if ($declaracao->execute()){
            echo" <script>
                alert('Aluno cadastrado com sucesso');
                 window.location.href ='../HTML/cad_aluno.html'
            </script>";
        }

        else{
            echo "Erro ao cadastrar um aluno: " . $declaracao->error;
        }
    }

?>