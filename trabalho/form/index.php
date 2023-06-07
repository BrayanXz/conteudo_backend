    <?php 
     require "consultar_todos.php";
     require_once "../template/cabeçalho.php";
     ?>

    <div class="container">

    <h1>Tutores</h1>
    <hr>
    
    <div class="text-end">
    <a href="formulario.php" class="btn btn-success" >Inserir Novo</a>
    <table class="table" id="tabela_dados">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Formacão</th>
      <th scope="col">Tipo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($tutores as $tutor): ?>
    <tr>
      <td><?php echo $tutor->nome ?></td>
      <td><?php echo $tutor->formacao ?></td>
      <td><?php echo $tutor->tipo ?></td>
      <td class="text-end" width="25%">
        <a href="excluir.php?id=<?= $tutor->idtutor?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Excluir</a>
        <a href="formulario.php?id=<?= $tutor->idtutor?>" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Editar</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</div>

<?php require_once "../template/rodape.php"; ?>