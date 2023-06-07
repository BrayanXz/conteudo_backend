<?php
require_once "../banco/conexao.php";

if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"]) && isset($_POST["n4"]) && isset($_POST["n5"])){

$nome = $_POST["n1"];
$sexo = $_POST["n2"];
$polo = $_POST["n3"];
$formacao = $_POST["n4"];
$tipo = $_POST["n5"];

$sql = "INSERT INTO `tutor` (`nome`, `sexo`, `polo`, `formacao`, `tipo`, ) VALUES (?, ?, ?, ?, ?);";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("sssss", $nome , $sexo , $polo, $formacao, $tipo); 

$comando->execute();

}
header('location: index.php');
?>