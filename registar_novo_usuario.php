<?php
  include 'html_header.php';
  include 'html_footer.php';
    //SISTEMA DE CRUD
    //echo 'tratar o formulário de novo usuário';
    //echo '<pre>';
    //var_dump($_POST); //super global $_POST com um array com os names e values de input do form

    //INCLUIR GESTOR
    include 'gestor.php';
    $gestor = new Gestor();

    //PREPARAR DADOS
    $params = array (
        ':user' => $_POST['txtUser']
    );

    //
    $resultado = $gestor->EXE_QUERY("
    SELECT * FROM users WHERE user = :user 
    ",$params);
    //verificar se existe user com o mesmo nome
    if (count($resultado) != 0){
        //SIM -> apresentar uma msg a indicar que já existe
        //foi encontrado pelo menos 1 registo em que user = user
        echo '<h3> User já está registado!</h3>';
        echo '<hr><br><a href="form_novo_user.php">Voltar</a><br><hr>';
    } else {
        //NÃO -> guarda novo registo na BD
        //podemos guardar o novo user
            
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
        
        //APRESENTAR INFORMAÇÃO E LINK PARA VOLTAR AO INDEX.PHP
        echo '<h3>User adicionado com sucesso!</h3>';
        echo '<hr><br><a href="index.php">Voltar</a><br><hr>';
    }





