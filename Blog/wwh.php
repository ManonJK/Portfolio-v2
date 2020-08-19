<?php
require_once('../database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Bienvenue sur mon site CV. Retrouvez toutes les informations me concernant, Manon JULIEN KUENTZ"/>
    <meta name="keywords" content="Accueil, Développement, Etudiante, Portfolio, Web, Informatique, Présentation"/>
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
        <img src="https://www.inextremis-escapeblog.com/wp-content/uploads/sites/16/2019/11/we-were-here.jpg" alt="Image de couverture de We were here">
    </div>

    <div id="title">
        <h1>We were here, la triologie de jeux immanquable !</h1>
        <h4>Posté le 09 janvier 2020</h4>
    </div>
    <div class="bloc">
        <h2>We were here - Total Mayhem Games</h2>
        <p>
            We were here est un jeu de coopération asymétrique sorti pour la première fois le 03 février 2017. C'est une trilogie dont le principe est de venir à bout de diverses énigmes, le tout en communiquant avec son partenaire. Pour cela, rien de plus simple : un talkie-walkie chacun, et c'est parti.
        </p>
        <p>
            Le tout peut paraître un peu facile, mais que nenni ! Les énigmes, plus complexes les unes que les autres poussent les joueurs à communiquer un maximum. Car il n'est pas de réussite dans ce jeu sans communication.
        </p>
        <p>
            Le 1er Youtuber de France (Squeezie) a testé le jeu avec le vidéaste Doigby. De quoi montrer aux viewers les situations les plus épiques que l'on peut rencontrer !
        </p>

        <iframe width="500px" height="300px" src="https://www.youtube.com/embed/TRxJYX4OjEY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <br><p>
            Après avoir testé la trilogie complète, mon avis est assez tranché : il s'agit d'une des meilleures séries de jeux auxquelles j'ai pu jouer. La mécanique de jeu est très complète, les énigmes toutes intéressantes. Les quelques bugs présents ne sont pas très dérangeants, et le jeu nous plonge dans un univers tout nouveau, nous faisant progresser et pousser notre réflexion à son maximum.
        </p>
        <p>
            Enfin, la communauté est assez active, et il est possible d'interagir avec les joueurs comme avec les développeurs sur leur serveur discord public : https://discord.gg/2rEUks
        </p>
    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>