<?php
require_once "../conexao.php";

$nome = $_POST["n1"];
$login = $_POST["n2"];
$senha = $_POST["n3"];

$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES ('$nome', '$login', '$senha');";

$comando = $conexao->prepare($sql);

$comando->execute();