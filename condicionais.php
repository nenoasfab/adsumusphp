<?php

$qualidade = 30;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualidade < $idadeCrianca){
    echo "Criança";
}elseif($qualidade < $idadeMaior){
    echo "adolescente";
}elseif($qualidade < $idadeMelhor){
    echo "adulto";
}else{
    echo "Idoso";


}


echo "<br>";


?>