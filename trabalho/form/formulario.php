<?php
    require_once "consultar_por_id.php";
    require_once "../template/cabeçalho.php";
?>

<div class="container">
  
    <h1>Cadastro de Tutores</h1>
    <hr>
    <form action="<?php echo isset($tutor) ? "atualizar.php" : "inserir.php"; ?>" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="idtutor" id="n6" value="<?php echo $tutor->idtutor ?? "" ;?>"><br>  

        <label class="form-label">Nome</label><br>
        <input class="form-control" type="text" name="n1" id="n1" value="<?php echo $tutor->nome ?? "" ;?>"><br>

        <label class="form-label">Sexo</label><br>
        <input class="form-control" type="text" name="n2" id="n2" value="<?php echo $tutor->sexo ?? "" ;?>"><br>

        <label class="form-label">Polo</label><br>
        <input class="form-control" type="text" name="n3" id="n3" value="<?php echo $tutor->polo ?? "" ;?>"><br>

        <label class="form-label">Formação</label><br>
        <input class="form-control" type="text" name="n4" id="n4" value="<?php echo $tutor->formacao ?? "" ;?>"><br>

        <label class="form-label">Tipo</label><br>
        <input class="form-control" type="text" name="n5" id="n5" value="<?php echo $tutor->tipo ?? "" ;?>"><br>

        <button type="submit" class="btn btn-success">Cadastrar</button>
    </form>
</div>

    <?php require_once "../template/rodape.php"; ?>