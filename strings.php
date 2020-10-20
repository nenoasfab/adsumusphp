<?php

// $nome = "Adsumus";
// $sobrenome = "Tecnologia";

// var_dump("$nome, $sobrenome");

$nome = "Adsumus Tecnologia";

// echo strtoupper($nome);
// echo "<br>";
// echo strtolower($nome);
// echo "<br>";
// echo ucwords($nome);
// echo "<br>";
// echo ucfirst($nome);
// echo "<br>";

$carro = "Marea";
// echo "<br>";

$trocarCarro = str_replace("Marea", "Ferrari", $carro);

// echo $trocaCarro;

$frase = "Repetição";

$palavra = "Repetição";

$q = strpos($frase, $palavra);


$texto = substr($frase, 0, $q);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

$fraseNova = $texto." ".$texto2;

// echo $fraseNova;





?>