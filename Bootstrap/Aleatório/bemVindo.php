<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <title>Página Inicial - Autoescola</title>
   
</head>
<body>
    <div class="container">
        <h1>Olá, [Nome do Funcionário]!</h1>
        <p>Hoje é dia <span id="dataAtual"></span>.</p>
        <p>Clique no menu e escolha o que deseja fazer:</p>
        <div class="menu">
            <a href="#cadastrarAluno">Cadastrar Aluno</a>
            <a href="#cadastrarCarro">Cadastrar Carro</a>
            <a href="#agendarAula">Agendar Aula</a>
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
