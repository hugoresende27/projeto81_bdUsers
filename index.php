<?php

    /////////////////////////////////////interface 
    echo '<h3>gestão de users</h3>';
    echo '<hr>';


    /////////////////////////////////////navegação
    echo "<a href=''>Adicionar User</a>";
    echo '<h1>teste1</h1>';
    /////////////////////////////////// tabela com users existentes


    /////////////////////////////////////incluir o sistema de gestão
    include 'gestor.php';
    $gestor = new Gestor();

    ///////////////////////////////////// buscar dados de users registados
    $resultados = $gestor->EXE_QUERY("SELECT * FROM tbl_autores");
    ///////////////////////////////////// apresentar resultados numa tabela
    echo count($resultados);
    
?>

<table>
    <thead>
        <tr>
            <th>USER</th>
            <th>CRIADO EM:</th>
            <th>AÇÔES</th>
        </tr>
    </thead>
</table>