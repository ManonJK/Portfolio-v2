<?php
session_start(); #On start la session
require_once('database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">

<?php #On inclut la navbar
$title = "Portfolio";
include ('components/head.php');
?>

<body class="h-100">

<?php
include ('components/navbar.php');
?>

<main class="h-100">
    <div id="content" class="container-fluid d-flex flex-column align-items-center h-100">
        <div id="titre">
            <h1>Portfolio</h1> <!--Titre principal de la page-->
            <hr class="line">
            <div> <!--Texte de la page-->
                <p>Découvrez les projets sur lesquels j'ai travaillé</p>
            </div>
        </div>

        <!--On fait les liens de nos boutons vers les pages à rpopos et portfolio-->
        <div class="container-fluid row" id="portfolio-grid">
            <div class="container-card product-box" onclick="window.open('https://github.com/ManonJK/Laravel');">
                <div class="">
                    <img src="assets/images/laravel.JPG" class="image" alt="Laravel">
                </div>
                <div class="middle">
                    <div class="text card-title">En cours : Projet Laravel</div>
                    <div class="text card-content">Laravel / HTML5 / CSS3 / PHP</div>
                </div>
            </div>
            <div class="container-card product-box" onclick="window.open('https://github.com/ManonJK/Javascript-RPG-text');">
                <div class="">
                    <img src="assets/images/rpg.jpg" class="image" alt="projet rpg simpson">
                </div>
                <div class="middle">
                    <div class="text card-title">RPG Text : The Simpson</div>
                    <div class="text card-content">Javascript / HTML5 / CSS3</div>
                </div>
            </div>
            <div class="container-card product-box" onclick="window.open('https://github.com/ManonJK/Portfolio');">
                <div class="">
                    <img src="assets/images/site.JPG" class="image" alt="mon site web">
                </div>
                <div class="middle">
                    <div class="text card-title">Site web personnel</div>
                    <div class="text card-content">HTML5 / CSS3 / PHP / Javascript</div>
                </div>
            </div>
        </div>
        

    </div>

</main>

</body>

</html>
