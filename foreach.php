<?php

if(isset($_GET)){
    foreach($_GET as $key=>$value){
        echo "nome do campo: ".$key;
        echo "valor do campo: ".$value;
        echo "<hr>";
        
    }
}

?>