<?php

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

   // print_r($user);

?>
<form action="editar_final.php" method="post">
    <label>Nome User: </label>
    <input type="hidden" name="idUser" value="<?php echo $id?>">
    <input type="text" name="txtUser"  value="<?php echo $user[0]['user']?>" required>
    <input type="submit" value="Alterar">
</form>