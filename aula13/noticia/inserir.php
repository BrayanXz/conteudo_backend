<?php
require_once "../banco/conexao.php";

if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"])){

require_once "faz_upload.php";

$titulo = $_POST["n1"];
$materia = $_POST["n2"];
$categoria = $_POST["n3"];

$sql = "INSERT INTO `noticia` (`titulo`, `materia`, `categoria`, `foto`) VALUES (?, ?, ?, ?);";

echo $sql;

$comando = $conexao->prepare($sql);

$comando->bind_param("ssss", $titulo , $materia , $categoria, $nome_foto); 

$comando->execute();

}
header('location: index.php');