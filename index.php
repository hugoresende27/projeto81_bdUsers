<?php

    /////////////////////////////////////interface 
    echo '<h3>gestão de users</h3>';
    echo '<hr>';


    /////////////////////////////////////navegação
    echo "<a href='form_novo_user.php'>Adicionar User</a>";
    /////////////////////////////////// tabela com users existentes
    echo '<hr>';

    /////////////////////////////////////incluir o sistema de gestão
    include 'gestor.php';
    $gestor = new Gestor();

    ///////////////////////////////////// buscar dados de users registados
    $utilizadores = $gestor->EXE_QUERY("SELECT * FROM users");
    ///////////////////////////////////// apresentar resultados numa tabela
    
    
    
?>

<table border="1">
    <thead>
        <tr>
            <th>USER</th>
            <th>CRIADO EM:</th>
            <th>AÇÔES</th>
        </tr>
    </thead>
    <tbody>

     <?php foreach($utilizadores as $usuario): ?> 
        <tr>
        <!-- em cada volta do ciclo cada $utilizador passa a ser $usuario  -->
            <td><?php echo ($usuario['user'])?></td>
            <td><?php echo ($usuario['created_at'])?></td>
            <td>Editar | Eliminar</td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<p>Resultados : <?php echo count($utilizadores) ?></p>