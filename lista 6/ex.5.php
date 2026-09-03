<?php

$opcao = 2;
echo "Bem vindo a Warrior's Legancy<br>🐻 BraveBear (Nv. 30)<br>56.980/80.000xp<br>💎 Gemas: 7<br>🪙 Moedas: 50.976<br><br>";
echo "1 - Jogar<br>";
echo "2 - Personagens<br>";
echo "3 - Ranking<br>";
echo "4 - Configurações<br>";
echo "5 - Sair<br><br>";

switch ($opcao){
    case 1:
        echo "Aguardando jogadores (1/12)...<br><br> Dica: Cada guerreiro tem seu atributo especial, lembre-se de usá-lo para te ajudar nos combates!<br>Carregando...";
        break;
    case 2:
        echo "Seus personagens:<br> - Azula (Comum) (Nv. 9)<br> - Sancho (Comum) (Nv. 6)<br> - Belmont (Incomum) (Nv. 6)<br> - Lunalla (Raro) (Nv. 4)<br> - Ruby (Raro) (Nv. 3)<br>";
        break;
    case 3:
        echo "Ranking atual (Expira em 8d 15hrs):<br>1. Você - 18.976 pts<br>2. SuperBeast - 14.090 pts<br>3. StylishWitch - 10.548 pts<br>4. FeralMonster - 8.770 pts<br>5. WiseSorcerer - 6.771 pts";
        break;
    case 4:
        echo "Música: Ativado<br>Efeitos sonoros: Ativado<br>Vibrações: Desativado<br>Tutorial<br>Sair da conta";
        break;
    case 5:
        echo "Obrigado, nobre guerreiro!";
    default:
        echo "Opção inválida";
}

?>