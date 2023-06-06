<?php
    require_once "../login/controlar_acesso.php";
    require_once "consultar_por_id.php";
    require_once "../template/cabeçalho.php";
    require_once "../template/menu_restrito.php";
?>

<div class="container">
  
    <h1>Cadastro de Noticias</h1>
    <hr>
    <form action="<?php echo isset($noticia) ? "atualizar.php" : "inserir.php"; ?>" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="idnoticia" id="n1" value="<?php echo $noticia->idnoticia ?? "" ;?>"><br>  

        <label class="form-label">Titulo</label><br>
        <input class="form-control" type="text" name="n1" id="n1" value="<?php echo $noticia->titulo ?? "" ;?>"><br>

        <label class="form-label">Materia</label><br>
        <textarea class="form-control" type="text" name="n2" id="n2"><?php echo $noticia->materia ?? "" ;?></textarea><br>

        <label class="form-label">Categoria</label><br>
        <input class="form-control" type="text" name="n3" id="n3" value="<?php echo $noticia->categoria ?? "" ;?>"><br>

        <label class="form-label">foto</label><br>
        <input class="form-control" type="file" name="n4" id="n4" value="<?php echo $noticia->foto ?? "" ;?>"><br>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

    <?php require_once "../template/rodape.php"; ?>