<?php
require_once "../banco/conexao.php";

$id = $_POST["idtutor"];
$nome = $_POST["n1"];
$sexo = $_POST["n2"];
$polo = $_POST["n3"];
$formacao = $_POST["n4"];
$tipo = $_POST["n5"];

$sql = "UPDATE `tutor` SET `nome`=?, `sexo`=?, `polo`=?, `formacao`=?, `tipo`=? WHERE  `idtutor`=?;";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssssi", $nome , $sexo , $polo , $formacao , $tipo , $id); 

$comando->execute();

header('location: index.php');