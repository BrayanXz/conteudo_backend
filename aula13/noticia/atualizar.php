<?php
require_once "../conexao.php";

$id = $_POST["n4"];
$titulo = $_POST["n1"];
$materia = $_POST["n2"];
$categoria = $_POST["n3"];

$sql = "UPDATE `noticia` SET `titulo`=?, `materia`=?, `categoria`=? WHERE  `idnoticia`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssi", $titulo , $materia , $categoria , $id); 

$comando->execute();

header('location: index.php');