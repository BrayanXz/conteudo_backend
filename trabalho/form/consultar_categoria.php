<?php
require_once "../banco/conexao.php";


$sql = "SELECT distinct formacao FROM tutor"; 

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$formacoes = [];
while ($tutot = $resultado->fetch_object()){
    $formacoes [] = $tutor; }
