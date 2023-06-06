<?php
    require_once "../login/validar.php";
    require_once "../template/cabeçalho.php";
    require_once "../template/menu_restrito.php";
?>

<div class="container">

   <h1>Area Restira</h1>
    <hr>
    <?php if(isset($erro_login)): ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php echo $erro_login; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php endif; ?>
    <form action="formulario.php" method="post" enctype="multipart/form-data">

        <label class="form-label" for="">Login</label><br>
        <input class="form-control" type="text" name="login" id="login"
        ><br>

        <label class="form-label" for="">Senha</label><br>
        <input class="form-control" type="password" name="senha" id="senha"><br>

        <button type="submit">Entrar</button>
    </form>
</div>
  <?php require_once "../template/rodape.php"; ?>