<?php
    include 'html_header.php';
    include 'html_footer.php';
    $id = $_GET['id'];
    // ELIMINAR REGISTO 
    include 'gestor.php';
    $gestor = new Gestor();

    //buscar os dados dos users registados
    $params = array (
        ':id_user' => $id
    );
    $user = $gestor->EXE_NON_QUERY("DELETE FROM users WHERE id_user = :id_user",$params);
?>

    <h1>REGISTO ELIMINADO</h1>
    <a href="index.php">Voltar</a>
<?php
    //REDIRECIONAR PARA O INDEX
    //sleep(5);
    //header("location: index.php");