<?php 
    $conteudo = file_get_contents("classes.json");

    $conteudoArray = json_decode($conteudo, true);

    foreach($conteudoArray["classes"] as $key){
        echo "Chave: " . $key . "<br>";      
    }
?>