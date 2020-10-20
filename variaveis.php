<?php

$nome = "neno";

// echo $nome;

$nomeCompleto = "neno andrade";
$anoNascimento = 1996;

$nomeAno = $nomeCompleto."/".$anoNascimento;

$fraseComplets = "Nome: $nomeCompleto <br> Ano de nascimento: $anoNascimento";

unset($nomeCompleto);

if(isset($nomeCompleto)){
    echo $nomeCompleto;
}

$nome = (int)$_GET["a"];

$ip = $_SERVER["REMOTE_ADDR"];

echo $ip;

$nomeScript = $_SERVER[SCRIPT_NAME];
?>