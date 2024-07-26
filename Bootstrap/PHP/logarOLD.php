<?php
    include 'database.php';
    if(isset($_POST['logar'])){
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

        if(strlen($_POST['email'])==0){     
            echo "<script>
                alert ('Preencha o campo email.')
            </script>";                     
        }

        else if(strlen($_POST['senha'])==0){
            echo "<script>
                alert ('Preencha o campo senha.')
            </script>";
        }

        else{

        }
    }

    // echo "<br> Preencha o campo 'email'.";
    // echo "<br> Preencha o campo 'senha'.";
    // echo $email.' .' . $senha;
?>