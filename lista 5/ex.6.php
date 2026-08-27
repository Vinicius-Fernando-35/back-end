<?php

$idade = 16;

if ($idade < 12){
    echo "Você é criança";
}
elseif ($idade >= 12 && $idade < 18){
    echo "Você é adolescente";
}
elseif ($idade >= 18 && $idade < 60){
    echo "Você é adulto";
}
else{
    echo "Você é idoso";
}

?>