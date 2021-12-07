<?php

    //echo '<pre>';
    //print_r($_POST);

    //buscar info do post
    $id_user = $_POST['idUser'];
    $user = $_POST['txtUser'];

    //abrir ligação à BD
    include 'gestor.php';
    $gestor = new Gestor();

    //verificar se existe outro user com o mesmo nome
    $params = array(            //= a $params = [];
        ':id' => $id_user,
        ':user'=>$user
    );

    $res = $gestor->EXE_QUERY("
        SELECT user FROM users
        WHERE user = :user AND id_user <> :id 
    ",$params);

    //se já existe apresentar a mensagem de erro
    if (count($res) != 0){
        echo 'Já existe outro user com o mesmo nome!';
        echo '<p><a href="index.php">Voltar</a></p>';
        exit();//para o resto do código não ser lido
    } 

    //se não existe atualiza os dados no user seleccionado
    $gestor->EXE_NON_QUERY("
        UPDATE users SET user = :user,
                         updated_at = NOW()
        WHERE id_user = :id
    ",$params);

    header("location: index.php");