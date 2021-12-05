<?php

    /////////////////////////////////////interface 
    echo '<h3>gestão de users</h3>';
    echo '<hr>';


    /////////////////////////////////////navegação
    echo '<a href="">Adicionar User</a>';

    /////////////////////////////////// tabela com users existentes


    /////////////////////////////////////incluir o sistema de gestão
    include 'gestor.php';
    $gestor = new Gestor();


    ///////////////////////////////////// buscar dados de users registados
    $resultados = $gestor->EXE_QUERY("SELECT * FROM users");
    ///////////////////////////////////// apresentar resultados numa tabela
    echo '<h3> teste'.count($resultados);
    echo '<pre>';
    print_r($resultados);

?>