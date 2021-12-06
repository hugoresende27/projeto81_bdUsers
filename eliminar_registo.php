<?php
    $id = $_GET['id'];
    // ELIMINAR REGISTO 
    include 'gestor.php';
    $gestor = new Gestor();

    //buscar os dados dos users registados
    $params = array (
        ':id_user' => $id
    );
    $user = $gestor->EXE_NON_QUERY("DELETE FROM users WHERE id_user = :id_user",$params);

    //REDIRECIONAR PARA O INDEX
    header("location: index.php");