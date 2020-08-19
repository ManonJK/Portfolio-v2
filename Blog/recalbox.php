<?php
require_once('../database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Webix, le framework pour les professionnels"/>
    <meta name="keywords" content="Webix, Javascript, Article"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <link rel="stylesheet" href="articles.css">
    <title>Manon JULIEN KUENTZ - Blog</title>
</head>
<body class="h-100">

<header>
    <?php
    include('components/nav.php');
    ?>
</header>

<main class="h-100">

    <div id="fond">
        <img src="../assets/images/switch.png" alt="console switch">
    </div>

    <div id="title">
        <h1>Recalbox : l'OS pour votre borne d'arcade</h1>
        <h4>Posté le 23 novembre 2019</h4>
    </div>
    <div class="bloc">
        <h2>Recalbox, une belle invention</h2>
        <p>
            Recalbox, qu'est-ce que c'est ? Il s'agit d'un OS libre et gratuit dédié au rétrogaming. Rien que comme ça, je sens que ça donne déjà envie, je me trompe ?
        </p>
        <p>
            Avec cet OS, il est possible d'émuler un grand nombre de consoles rétro (95 avec la version 6.1), de quoi redécouvrir les jeux qui en ont fait rêver plus d'un. A l'origine développé pour la Raspberry pi, il est aujourd'hui possible de l'utiliser sur PC.
        </p>
        <p>
            Petit bémol qui ne saurait durer : Recalbox n'est pas encore compatible avec la Raspberry pi 4, digne successeuse de la Rapberry pi 3A+, qui fera tourner les jeux de façon bien plus optimale tous les jeux.
        </p>
        <p>
            En attendant cette future compatibilité, je vous invite à visiter leur site sur lequel vous pourrez retrouver toutes les étapes nécessaires à la création de votre Recalbox, que vous pouvez aisément adapter afin de faire une borne d'arcade. Qui n'a jamais rêver d'un petit bijou comme ceci dans son salon ?
        </p>
        <img src="../assets/images/arcade.jpg" alt="Borne d'arcade">

        <br>
        <br>
        <blockquote class="blockquote">
            <footer class="blockquote-footer">Source : <cite title="Source Title">https://www.01net.com/actualites/recalbox-6-1-avalanche-de-nouveautes-pour-la-distribution-phare-du-retrogaming-1775544.html</cite></footer>
        </blockquote>

    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>