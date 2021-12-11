<?php
     include 'html_header.php';
     include 'html_footer.php';

?>



<title>Adicionar User</title>
</head>
<body>

<h3>Adicionar User</h3>
<hr>
<a href="index.php">Voltar</a>
<hr>

<form action="registar_novo_usuario.php" method="post">
    <p><input type="text" name="txtUser" placeholder="User name" required></p>
    <p><input type="password" name="txtPass" placeholder="Password" required></p>
    <input type="submit" value="Registar">
</form>
    
<?
