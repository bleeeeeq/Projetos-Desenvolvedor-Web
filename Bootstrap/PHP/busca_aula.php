<?php
    include 'database.php';
    if(isset($_POST['delete_id'])){
        $id = $_POST['delete_id'];
        $declaracao = "DELETE FROM `aula` WHERE idaula = ? ;";
        $declaracao = $conexao -> prepare($declaracao);
        $declaracao -> bind_param("i", $id);

        if($declaracao -> execute()){
            header("Location: ../HTML/tabelaAula.php?message=Deletado com sucesso!");
        }
        else{
            header("Location: ../HTML/tabelaAula.php?message=Erro ao deletar");
        }

        $declaracao -> close();
        $conexao -> close();
        exit();
    }
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
            $formatarData = date('d/m/Y', strtotime ($linha['data']));
            $formatarHora = date('H:i', strtotime ($linha['hora']));
            $results .=  "<tr>
                            <td>{$formatarData}</td>
                            <td>{$formatarHora}</td>
                            <td>{$linha['instrutor']}</td>
                            <td>{$linha['aluno']}</td>
                            <td>{$linha['veiculo']}</td>

                            <td><form action='../PHP/busca_aula.php' method='POST' style ='display: inline;'>
                                <input type='hidden' name='delete_id' value='{$linha['idaula']}'>
                                <button type='submit' name='delete'>Deletar</button>
                            </form>

                            <form action='#' method='GET' style ='display: inline;'>
                                <input type='hidden' name='editar_id' value='{$linha['idaula']}'>
                                <button type='submit' name='edit'>Editar</button>
                            </form></td>                            
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