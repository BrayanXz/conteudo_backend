<?php
require_once "../banco/conexao.php";

$id = $_GET["id"];

$sql = "DELETE FROM `tutor` WHERE  `idtutor`= ?;"; 

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

header('location: index.php');