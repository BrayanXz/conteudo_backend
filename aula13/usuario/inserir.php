<?php
require_once "../conexao.php";

if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"])){
$nome = $_POST["n1"];
$login = $_POST["n2"];
$senha = password_hash($_POST["n3"], PASSWORD_BCRYPT);

$sql = "INSERT INTO `usuario` (`nome`, `login`, `senha`) VALUES (?, ?, ?);";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sss", $nome , $login , $senha); 

$comando->execute();

}
header('location: ../usuarios.php');