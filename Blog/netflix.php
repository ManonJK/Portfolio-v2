<?php
require_once('../database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Netflix et le Chaos engineering, un histoire d'amour"/>
    <meta name="keywords" content="Netfix, Chaos, Engineering, Article"/>
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
        <img src="../assets/images/chaos.jpg" alt="Chaos">
    </div>

    <div id="title">
        <h1>Le Chaos Engineering chez Netflix</h1>
        <h4>Posté le 15 juillet 2019</h4>
    </div>
    <div class="bloc">
        <h2>Netflix - Des serveurs en béton armé</h2>
        <p>
            Netflix, Vous connaissez, n'est-ce pas ? Il s'agit évidemment de cette plateforme de vidéos en streaming <b>légal</b> fondée en 1997 qui recense 10 ans après plus de 100 millions d'utilisateurs avec un abonnement mensuel. Vous pensez que leur plateforme ne subit des tests qu'en développement ? Vous allez être surpris alors !
        </p>
        <p>
            En effet, Netflix a mis en avant récemment le Chaos engineering qu'ils ont mis en place.
            <br>Mais qu'est-ce que le Chaos engineering ?
        </p>
        <p>Le Chaos engineering est défini comme ceci par Wikipédia :<br>
            <i>'Chaos engineering is the discipline of experimenting on a software system in production in order to build confidence in the system's capability to withstand turbulent and unexpected conditions.'</i>
            <br>Pour tous ceux qui ne parlent pas anglais, le Chaos engineering est la discipline d'expérimenter sur un système logiciel en production afin de renforcer la confiance dans la capacité du système à résister à des conditions turbulentes et inattendues.
        </p>
        <p>
            Il existe plusieurs modèles de perturbation, et celui utilisé par Netflix est le Chaos Monkey, inventé par la société en 2012.
            <br>Pour comprendre le Chaos Monkey, il faut imaginer des singes qui rentreraient dans le datacenter concentrant tous les points les plus critiques. Ce dernier arracherait et déchirerait des câbles au hasard, créant des pannes. C'est ce que fait le Chaos Monkey : de temps à autre, il fait tomber des parties au hasard de l'infrastructure, obligeant les responsables informatiques à concevoir un système qui résiste aux pannes.
        </p>
        <img src="../assets/images/monkeys.jpg" alt="Singes">
        <br>
        <br><p>
            Ce système ingénieux permet à Netflix de garantir son service, ainsi que sa qualité : nous ne pouvons pas avoir peur de payer pour rien !
        </p>

        <blockquote class="blockquote">
            <footer class="blockquote-footer">Source : <cite title="Source Title">Wikipédia</cite></footer>
        </blockquote>
    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>