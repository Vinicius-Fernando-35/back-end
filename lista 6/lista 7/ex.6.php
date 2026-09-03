<?php

function CalcularMedia ($n1, $n2, $n3)
{
    return "<br>".($n1 + $n2 + $n3)/3;
}

echo CalcularMedia(9.0, 7.5, 10.0);
echo CalcularMedia(10.0, 6.5, 9.0);
echo CalcularMedia(7.0, 6.0, 8.5);

?>