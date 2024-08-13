<?php
    session_start();
    /*if(isset($_SESSION['nome'])){
        $nomeUsuario = $_SESSION['nome'];
    }

    else{
        header("location: login.html");
    }*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/style1.css">
    <link rel="stylesheet" type="text/css" href="../CSS/style2.css">
    <title>Página Inicial - Autoescola</title>
   
</head>
<body>
    <?php
        include_once "navegador.php";
    ?>
    <div class="container">
        <h1>Olá, <?php echo htmlspecialchars ($nomeUsuario) ?>!</h1>
        <p>Hoje é dia <span id="dataAtual"></span>.</p>
        <p>Clique no menu e escolha o que deseja fazer:</p>
        <div class="menu">
            <a href="cad_aluno.php">Cadastrar Aluno</a>
            <a href="#cadastrarCarro">Cadastrar Carro</a>
            <a href="cadastrarAula.php">Agendar Aula</a>
        </div>
    </div>

    <script>
        function formatarData(data){
            // Formatar a aparência da data

            const opcao ={weekday: 'long', year: 'numeric', month: 'numeric', day: 'numeric'}
            return data.toLocaleDateString ('pt-BR', opcao)
        }
        // innerText = É o que sobrepõe uma informação de texto

        document.getElementById('dataAtual').innerText = formatarData (new Date())
    </script>
    
</body>
</html>
