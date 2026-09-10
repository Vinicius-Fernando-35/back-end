<?php

$contador = 0;

for ($i = 1; $i <=10; $i++){

   if ($i % 3 == 0){
    echo "$i é multiplo de 3<br>";
    $contador ++;
   }
}
echo "<br>";
echo "Qtd de múltiplos de 3: $contador";

?>