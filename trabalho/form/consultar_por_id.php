<?php
require_once "../banco/conexao.php";

if(isset($_GET["id"])){

$id = $_GET["id"];

$sql = "SELECT * FROM `tutor` WHERE  `idtutor`= ?;"; 

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id); 

$comando->execute();

$resultado = $comando->get_result();

$tutor = $resultado->fetch_object();

}