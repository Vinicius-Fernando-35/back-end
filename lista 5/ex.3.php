<?php

$n1 = 8;
$n2 = 6;
$n3 = 7;

$media = ($n1 + $n2 + $n3)/3;

if ($media >= 7){
    echo "Aprovado direto!";
}
elseif ($media >=5 && $media < 7){
    echo "Tem direito à recuperação!";
}
else{
    echo "Reprovado :(";
}

?>