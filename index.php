<?php
    include ('html_header.php');
  
    

    /////////////////////////////////////interface 
   
    echo "<h3 class='p-3 mb-2 bg-warning text-dark'>gestão de users</h3>";
    echo '<hr>';


    /////////////////////////////////////navegação
    echo "<a href='form_novo_user.php' class='btn btn-secondary'>Adicionar User</a>";
    /////////////////////////////////// tabela com users existentes
    echo '<hr>';

    /////////////////////////////////////incluir o sistema de gestão
    include 'gestor.php';
    $gestor = new Gestor();

    ///////////////////////////////////// buscar dados de users registados
    $utilizadores = $gestor->EXE_QUERY("SELECT * FROM users");
    ///////////////////////////////////// apresentar resultados numa tabela
    
    
    
?>
<div class="container-fluid m-3">
<table border="1" class="table-dark table-bordered table">
    <thead >
        <tr>
            <th>USER</th>
            <th>CRIADO EM:</th>
            <th>AÇÔES</th>
        </tr>
    </thead>
    <tbody  class="text-left">

     <?php foreach($utilizadores as $usuario): ?> 
        <tr>
        <!-- em cada volta do ciclo cada $utilizador passa a ser $usuario  -->
            <td style ="word-break:break-all;"><?php echo ($usuario['user'])?></td>
            <td style ="word-break:break-all;"><?php echo ($usuario['created_at'])?></td>
            <td style ="word-break:break-all;"><a href="editar_user.php?id=<?php echo $usuario['id_user'] ?>" class="btn btn-primary"> Editar </a>
               <a href="eliminar_confirmar.php?id=<?php echo $usuario['id_user'] ?> "class="btn btn-danger"> Eliminar </a></td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>

<p>Resultados : <?php echo count($utilizadores) ?></p>
</div>

</div>
</div>
<?php 
    include ('html_footer.php');
 