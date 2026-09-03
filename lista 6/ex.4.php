<?php

$opcao = 2;
echo '<scan "style= color: red;">NETFLIX</h1><br>';
echo "1 - Assistir filme<br>";
echo "2 - Assistir série<br>";
echo "3 - Ver minha lista<br>";
echo "4 - Sair<br><br>";

switch ($opcao){
    case 1:
        echo "Abrindo filmes...";
        break;
    case 2:
        echo "Abrindo séries...";
        break;
    case 3:
        echo "Abrindo sua lista...";
        break;
    case 4:
        echo "Obrigado por utilizar a Netflix!";
        break;
    default:
        echo "Opção inválida";
}

?>