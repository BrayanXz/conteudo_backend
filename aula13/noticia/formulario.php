<?php
    require_once "consultar_por_id.php";
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
   <h1>Cadastro de Noticias</h1>
    <hr>
    <form action="<?php echo isset($noticia) ? "atualizar.php" : "inserir.php"; ?>" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="idnoticia" id="n1" value="<?php echo $noticia->idnoticia ?? "" ;?>"><br>  

        <label for="">Titulo</label><br>
        <input type="text" name="n1" id="n1" value="<?php echo $noticia->titulo ?? "" ;?>"><br>

        <label for="">Materia</label><br>
        <input type="text" name="n2" id="n2" value="<?php echo $noticia->materia ?? "" ;?>"><br>

        <label for="">Categoria</label><br>
        <input type="password" name="n3" id="n3" value="<?php echo $noticia->categoria ?? "" ;?>"><br>

        <label for="">foto</label><br>
        <input type="file" name="n4" id="n4" value="<?php echo $usuario->foto ?? "" ;?>"><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>