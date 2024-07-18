<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>
<body>
    <?php
    
    $nome = $_GET ['nome'];
    $ano = $_GET ['ano'];
    $sexo = $_GET ['sexo'];
    $idade = date("Y") - $ano;

    echo("Seu nome é $nome. <br> Atualmente, você tem $idade anos. <br> E você é do sexo $sexo");
    
    ?>
</body>
</html>