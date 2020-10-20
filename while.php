<?php

$condicao = true;

while($condicao){
    $numero = rand(1, 10);
    if($numero == 6){
        echo "seis";
        $condicao = false;
    }
    echo $numero. " ";

}

?>