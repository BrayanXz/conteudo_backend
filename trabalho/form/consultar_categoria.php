<?php
require_once "../banco/conexao.php";


$sql = "SELECT distinct formação FROM tutor"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$formacoes = [];
while ($tutot = $resultado->fetch_object()){
    $formacoes [] = $tutor; }