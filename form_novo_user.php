<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    
</body>
</html>