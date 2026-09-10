<?php

$soma = 0;
$seguidores = ["joaopaulozz", "juliacd", "marlao23"];

foreach($seguidores as $pessoas){
    echo "$pessoas <br>";
    $soma = $soma + 1;
}

echo "A primeira posição da lista é: $seguidores[0]";

?>