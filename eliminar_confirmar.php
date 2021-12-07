<?php
    
    //VERIFICAR SE O ID FOI INDICADO
    //metodo 1, isset
    // if(isset($_GET['id'])){
    //     echo 'Existe';
    // } else {
    //     echo 'NAO EXISTE!';
    // }
    // die();
    
    //metodo 2, if not isset return to index
    // if(!isset($_GET['id'])){
    //     Header('Location:index.php');
    // }

    //metodo 3,if empty
    // if(empty($_GET['id'])){
    //     echo 'NÂO Existe';
    //     die();
    // } else {
    //     echo 'EXISTE!';
    // }

    //metodo 4, filter-input - https://www.php.net/manual/pt_BR/function.filter-input.php
    
    $id = filter_input(INPUT_GET, 'id');

    if($id == false){
        echo 'não existe';
        die();
    }



    //VERIFICAR SE EXISTE USER COM O ID INDICATO
    

    //$id = $_GET['id'];
    //echo $id;
    // apresentar dados do usuário
    include 'gestor.php';
    $gestor = new Gestor();

    //buscar os dados dos users registados
    $params = array (
        ':id_user' => $id
    );
    $user = $gestor->EXE_QUERY("SELECT * FROM users WHERE id_user = :id_user",$params);

?>

<h3>ELIMINAR <strong><?php echo $user[0]['user'] ?></strong> ? </h3>

<div>
    <a href="index.php">NÂO</a> &nbsp;|&nbsp; <a href="eliminar_registo.php?id=<?php echo $id ?>">SIM</a>
</div>