<?php

    echo 'tratar o formulário de novo usuário';
    //echo '<pre>';
    //var_dump($_POST); //super global $_POST com um array com os names e values de input do form

    //INCLUIR GESTOR
    include 'gestor.php';
    $gestor = new Gestor();

    //PREPARAR DADOS
    $params = array (
        ':user' => $_POST['txtUser'],
        ':pass' => password_hash( $_POST['txtPass'],PASSWORD_DEFAULT)
    );

    //GUARDAR DADOS
    $gestor->EXE_NON_QUERY("
        INSERT INTO users (user,senha,created_at)
        VALUES (:user,:pass, NOW())
    ",$params);
        //verificar se existe user com o mesmo nome
        //SIM -> apresentar uma msg a indicar que já existe

        //NÃO -> guarda novo registo na BD

    //APRESENTAR INFORMAÇÃO E LINK PARA VOLTAR AO INDEX.PHP
    echo '<h3>User adicionado com sucesso!</h3>';
    echo '<hr><br><a href="index.php">Voltar</a><br><hr>';