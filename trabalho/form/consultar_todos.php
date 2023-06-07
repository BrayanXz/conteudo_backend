<?php
require_once "../banco/conexao.php";


$sql = "SELECT * FROM tutor"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$tutores = [];
while ($tutor = $resultado->fetch_object()){
    $tutores[] = $tutor; }