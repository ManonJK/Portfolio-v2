<?php
session_start(); #On start la session
require_once('database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">

<?php #On inclut la navbar
$title = "A propos";
include ('components/head.php');
?>

<body class="h-100">

<?php
include ('components/navbar.php');
?>

<main class="h-100">

    <?php
    include('components/loader.php');
    ?>

    <div id="content" class="container-fluid d-flex flex-column align-items-center h-100">
        <div id="titre">
            <h1>Qui suis-je ?</h1> <!--Titre principal de la page-->
            <hr class="line">
            <div class="scroll animated fadeInUp"></div>
        </div>

        <div class="row" style="padding: 0 2%;">

            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                <!--Ici ma présentation avec ma photo-->
                <div id="photo-prez"></div>
                <p>Etudiante en informatique chez Ynov Campus; je suis passionnée, dynamique et créative. Très curieuse de nature, j'apporte une dimension nouvelle à chaque projet</p>
                <button class="button2" type="button" onclick="window.location.href='contact.php'">Me contacter</button>

            </div>

            <div class="col-md-6 d-flex flex-column align-items-center justify-content-center">
                <!--Ici les compétences -->
                <h2>Mes compétences</h2>
                <div class="d-flex flex-row align-items-center justify-content-center row skill">
                    <i class="fas fa-laptop-code"></i><p>HTML5, CSS3, Javascript, PHP, Laravel</p>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center row skill">
                    <i class="fas fa-terminal"></i><p>Python, Java, Langage C</p>
                </div>
            </div>
        </div>

        <section class="steps steps-area">
            <div class="container">
                <!-- title-section -->
                <ul class="timeline">
                    <li class="timeline-box wow fadeInLeft">
                        <p class="timeline-title">Stage en développement chez Gamned!</p>
                        <p class="timeline-title timeline-date">Juillet 2019 - Août 2019</p>
                        <p class="timeline-details">Cette entreprise de publicité programmatique dans laquelle j'ai effectué un stage de 6 semaines m'a beaucoup apporté. J'ai pu y découvrir beaucoup de choses. Pour en savoir plus, allez lire mon article !</p>
                        <button class="button2" type="button" onclick="window.location.href='Blog/gamned.php'">En savoir plus</button>
                        <span>1</span>
                    </li>
                    <li class="timeline-box wow fadeInRight d-flex flex-column">
                        <p class="timeline-title">Etudes supérieures en informatique - Ynov Campus</p>
                        <p class="timeline-title timeline-date">Septembre 2018- Maintenant</p>
                        <p class="timeline-details">Actuellement en deuxième année, j'ai pu développer mes compétences dans les divers pôles de l'informatique (développement, infrastructure et réseaux) et ai pu expérimenter les Startups, les Workshops, ainsi que les projets de groupe
                        </p>
                        <span>2</span>
                    </li>
                    <li class="timeline-box  wow fadeInLeft d-flex flex-column">
                        <p class="timeline-title">Chef de Projet</p>
                        <p class="timeline-title timeline-date">Janvier 2016 - Juin 2018</p>
                        <p class="timeline-details">Lors de mes années au lycée, j'ai eu l'occasion de diriger deux projets :
                        <ul>
                            <li>Un projet de développement (équipe de 4) d'un jeu pour enfants en HTML5 et CSS3</li>
                            <li>Un projet scientifique (équipe de 3) sur les effets de la musique classique sur les plantes</li>
                        </ul>
                        </p>
                        <span>3</span>
                    </li>
                    <li class="timeline-box wow fadeInRight d-flex flex-column">
                        <p class="timeline-title">Festival Hispanorama</p>
                        <p class="timeline-title timeline-date">Février 2015 - Avril 2018</p>
                        <p class="timeline-details">Durant ces trois années, j'ai participé à l'organisation du festival hispanorama, de plusieurs façons : création d'affiche, de bandes annonces, et présentation au public en bilingue</p>
                        <span>4</span>
                    </li>
                </ul>
            </div>
            <!-- .container -->
            </div>
        <!-- End container -->
        </section>

    </div>

</main>








</body>

</html>
