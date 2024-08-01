<?php
    include 'database.php';
    $sql = "SELECT * FROM aula";
    $results = '';

    if(isset($_POST['instrutor']) || isset ($_POST['nome_aluno'])){
        $instrutor = $_POST['instrutor'];
        $aluno = $_POST['nome_aluno'];

        $sql .=" WHERE 1 = 1";
        if (!empty($instrutor)){
            $sql .= " AND instrutor like '%$instrutor%'";
        }
        if (!empty($aluno)){
            $sql .= " AND aluno like '%$aluno%'";
        }
    }

    $resultado = $conexao->query($sql);
    if ($resultado -> num_rows > 0){
        while ($linha = $resultado -> fetch_assoc()){
            $results .=  "<tr>
                            <td>{$linha['data']}</td>
                            <td>{$linha['hora']}</td>
                            <td>{$linha['instrutor']}</td>
                            <td>{$linha['aluno']}</td>
                            <td>{$linha['veiculo']}</td>
                        </tr>";
        }
    }

    else{
        $results = "<tr>
                        <td colspan = '5'>Nenhuma aula encontrada</td>
                    </tr>";                        
    }

    $conexao -> close();
    header ("Location: ../HTML/tabelaAula.php?results=".urlencode($results));
    exit();

?>