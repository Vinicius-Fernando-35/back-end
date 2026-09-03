<?php

function Verificaridade($idade)
{
    if ($idade >= 18){
        return "Maior de idade. Pode tirar carta<br><br>";
    } else{
        return "Menor de idade. Só de uber kk<br><br>";
    }
}
echo Verificaridade(17);
echo Verificaridade(44);
echo Verificaridade(15);
echo Verificaridade(18);
?>