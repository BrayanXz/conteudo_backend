<h2>Vetor indexado por texto</h2>

<p>
    Os vetores podem usar textos para indexar (indentificar) os valores armazenados.
    exemplo:

<pre>
          +------------+
    nome  | Brayan     |
          +------------+
    nota1 |10          |
          +------------+
    nota2 |7           |
          +------------+      
</pre>  

</p>

<?php
$alunos = [
    "nome" => "Brayan",
    "nota1" => 10,
    "nota2" => 7
];

$alunos["notatotal"] = ($alunos["nota1"] + $alunos["nota2"]);
var_dump($alunos);

echo "<p>&nbsp;</p><pre>";

 //imprimir todos os valores de um vetor utilizando foreach

 foreach($alunos as $key => $value){
      printf("%23s\n", "+-----------+");
      printf("%9s | %9s | \n", $key, $value);
      
 }
 
 printf("%23s\n", "+-----------+");
 
?>
</pre>