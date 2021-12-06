<?php
    $id = $_GET['id'];
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