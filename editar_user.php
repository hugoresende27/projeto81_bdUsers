<?php
    include 'html_header.php';
    include 'html_footer.php';

    //VERIFICAR SE O ID FOI INDICADO
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if($id == false){
        Header('location:index.php');
    } 

    //buscar o id do user
    $id = $_GET['id'];
    // abrir ligação à db
    include 'gestor.php';
    $gestor = new Gestor();

    //buscar os dados dos users registados
    $params = array (
        ':id_user' => $id
    );

    $user = $gestor->EXE_QUERY("
        SELECT user FROM users WHERE id_user = :id_user
    ", $params);

   //VERIFICAR SE EXISTE USER COM O ID INDICATO
   if(count($user)==0){
    Header('location:index.php');//CHUTAR PARA CANTO
}

?>

<form action="editar_final.php" method="post" >
    <div class="form-group" >
        <label>Nome User: </label>
        <input type="hidden" name="idUser" value="<?php echo $id?>">
        <input type="text" name="txtUser"  value="<?php echo $user[0]['user']?>" required>
        <input type="submit" value="Alterar">
    </div>
</form>

