<?php
    require_once "usuario/consultar_por_id.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Cadastro de Usuario</h1>
    <hr>
    <form action="inserir.php" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="n1" id="n1" value="<?php echo $usuario->nome;?>"><br>

        <label for="">Login</label><br>
        <input type="text" name="n2" id="n2" value="<?php echo $usuario->login;?>"><br>

        <label for="">Senha</label><br>
        <input type="password" name="n3" id="n3" value="<?php echo $usuario->senha;?>"><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>