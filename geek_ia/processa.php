<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $tipo = $_POST["tipo"];
    $gen = $_POST["genero"];
    $obra = "";
    $desc = "";

//Animes
if ($tipo == "Anime" && $gen == "Ação"){
    $obra = "Attack on Titan (進撃の巨人)";
    $desc = "Humanos lutam pela sobrevivência contra gigantes devoradores.";
}
elseif ($tipo == "Anime" && $gen == "Romance"){
    $obra = "Your Lie in April (四月は君の嘘)";
    $desc = "Um pianista volta a tocar após conhecer uma violinista especial.";
}
elseif ($tipo == "Anime" && $gen == "Fantasia"){
    $obra = "Freiren: Beyond Journey's End ( 葬送のフリーレン)";
    $desc = "Uma fantasia sobre uma elfa que começa a compreender melhor os humanos";
}
elseif ($tipo == "Anime" && $gen == "Terror"){
    $obra = "Another (アナザー)";
    $desc = "Uma história de suspense e terror envolvendo acontecimentos misteriosos.";
}
elseif ($tipo == "Anime" && $gen == "Comédia"){
    $obra = "KonoSuba (この素晴らしい世界に祝福を！)";
    $desc = "Uma aventura de fantasia cheia de situações";
}

//Mangás
elseif ($tipo == "Mangá" && $gen == "Ação"){
    $obra = "One Piece";
    $desc = "Mistura aventura e ação em escala épica com a busca de Luffy pelo tesouro supremo.";
}
elseif ($tipo == "Mangá" && $gen == "Romance"){
    $obra = "Horimiya";
    $desc = "Mistura cotidiano e muito humor. Mostra a relação inesperada entre Hori, uma garota popular na escola mas caseira e responsável em casa, e Miyamura, um rapaz reservado que esconde piercings e tatuagens fora do colégio";
}
elseif ($tipo == "Mangá" && $gen == "Fantasia"){
    $obra = "Fullmetal Alchemist";
    $desc = "A história dos irmãos Edward e Alphonse Elric em busca da Pedra Filosofal é universalmente aclamada por sua coesão e drama.";
}
elseif ($tipo == "Mangá" && $gen == "Terror"){
    $obra = "Uzumaki";
    $desc = "A cidade costeira de Kurouzu-cho é consumida por uma maldição ligada a espirais — em conchas, plantas, cabelos e, eventualmente, nos próprios corpos dos habitantes.";
}
elseif ($tipo == "Mangá" && $gen == "Comédia"){
    $obra = "One Punch Man";
    $desc = "Subverte o gênero de heróis com a história de Saitama, um rapaz que derrotou qualquer inimigo com apenas um soco e sofre de tédio existencial.";
}

//Livros
elseif ($tipo == "Livro" && $gen == "Ação"){
    $obra = "A Ilha do Tesouro";
    $desc = "O clássico supremo dos piratas, mapas do tesouro, motins e combates físicos que definiu o gênero de aventura.";
}
elseif ($tipo == "Livro" && $gen == "Romance"){
    $obra = "O Morro dos Ventos Uivantes";
    $desc = "Um romance intenso e sombrio sobre a paixão destrutiva entre Heathcliff e Catherine.";
}
elseif ($tipo == "Livro" && $gen == "Fantasia"){
    $obra = "O Senhor dos Anéis: A Sociedade do Anel";
    $desc = "O grande clássico da alta fantasia. Acompanha a jornada épica pela Terra-média para destruir um anel poderoso.";
}
elseif ($tipo == "Livro" && $gen == "Terror"){
    $obra = "O Iluminado";
    $desc = "Stephen King: O terror psicológico definitivo sobre o isolamento e a desintegração mental no Hotel Overlook.";
}
elseif ($tipo == "Livro" && $gen == "Comédia"){
    $obra = "Cadê Você, Bernadette?";
    $desc = "• Uma comédia moderna contada por e-mails e cartas sobre uma arquiteta excêntrica que desaparece antes de uma viagem à Antártida.";
}
else{
    $obra = "One Piece";
    $desc = "Mistura aventura e ação em escala épica com a busca de Luffy pelo tesouro supremo.";
}

}
else{
    // Medida de Segurança
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekIA - Especialista Nerd</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.jpg">
</head>

<body>

    <div class="container">

        <img src="logo.jpg" width="200" alt="GeekIA Logo">

        <h2>Recomendação do GeekIA</h2>
        <?php echo $obra; ?>
        <?php echo "<br>"; ?>
        <?php echo $desc; ?>
    </div>

</body>

</html>