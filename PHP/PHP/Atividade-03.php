<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>

    <?php
        $texto = $_POST['texto'];
        $fonte = $_POST['fonte'];
        $cor = $_POST['cor'];
    ?>

    <style>
        span.texto{
            font-size: <?php echo $fonte; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>

</head>
<body>
    <h1>Veja abaixo o resultado</h1>
    <?php
        echo"<span class = 'texto'> $texto </span>"
    ?>
</body>
</html>