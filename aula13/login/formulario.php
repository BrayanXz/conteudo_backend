<?php
    require_once "../template/cabeçalho.php";
    require_once "../template/menu_restrito.php";
?>

<div class="container">

   <h1>Area Restira</h1>
    <hr>
    <form action="validar.php" method="post" enctype="multipart/form-data">

        <label class="form-label" for="">Login</label><br>
        <input class="form-control" type="text" name="n2" id="n2"
        ><br>

        <label class="form-label" for="">Senha</label><br>
        <input class="form-control" type="password" name="n3" id="n3"><br>

        <button type="submit">Entrar</button>
    </form>
</div>
  <?php require_once "../template/rodape.php"; ?>