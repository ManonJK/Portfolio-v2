<?php
require_once('../database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hacktag, le jeu où devenir hacker est beaucoup plus simple"/>
    <meta name="keywords" content="Hacktag, Jeu, Article"/>
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
        <img src="../assets/images/cyber_secu2.jpg" alt="fond cyber sécurité">
    </div>

    <div id="title">
        <h1>Hacktag : le jeu co-op à tester</h1>
        <h4>Posté le 10 décembre 2019</h4>
    </div>
    <div class="bloc">
        <h2>Hacktag, le jeu de hackers</h2>
        <p>
            Hacktag est un jeu d'infiltration à deux joueurs développé par Piece of Cake studios. Le principe est simple : enrôler le personnage du Hacker ou de l'agent infiltré pour effectuer des missions dans de grandes sociétés. Son mode de jeu asymétrique favorise la communication entre les joueurs et est très bien pensé !
        </p>
        <p>
            Vous ne savez pas avec qui jouer mais le jeu vous tente ? Pas de soucis : vous pouvez trouver votre partenaire en ligne directement dans le jeu, ou bien sur leur discord public :
            <a href="https://discord.gg/GY4PJm"><img src="../assets/images/discord.webp" style="width: 2%;"></a>
        </p>
        <p>
            Vous remarquez un bug dans le jeu ? Les développeurs sont très ouverts pour en parler avec vous sur discord, et pourront vous aider dans la résolution de vos problèmes.
        </p>
        <img src="../assets/images/hack.jpg" alt="Hack">
        <p>
            Soyez concentré car il ne suffit pas que de regarder l'écran pour s'assurer la victoire. En effet, vous devez coopérer avec votre partenaire afin de savoir où est-ce qu'il en est, et surtout comment vous pouvez vous aider mutuellement. C'est la base du jeu et la seule façon de pouvoir avancer.
        </p>
        <p>
            Maintenant que vous savez tout, qu'attendez-vous pour jouer ?
        </p>
        <p>Être Hacker ou Agent, telle est la question.</p>


        <br>
        <br>
        <blockquote class="blockquote">
            <footer class="blockquote-footer">Source : <cite title="Source Title">https://www.parisgamesweek.com/fr/article/hacktag</cite></footer>
        </blockquote>

    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>