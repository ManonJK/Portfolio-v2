<?php
session_start(); #On start la session
require_once('database/db.php'); #On connecte à la base
?>

<!DOCTYPE html>
<html lang="fr" class="h-100">

<?php #On inclut la navbar
$title = "Accueil";
include ('components/head.php');
?>

<body class="h-100" id="accueil">



<main class="h-100">

    <?php
    include('components/loader.php');
    ?>

    <div id="fond"></div>
    <div id="content" class="container-fluid d-flex flex-column align-items-center justify-content-center h-100">
        <div id="titre">
            <h1 id="h1-titre">Manon Julien Kuentz</h1> <!--Titre principal de la page-->
            <div> <!--Texte de la page-->
                <p id="dev">Développeuse web junior</p>
            </div>
        </div>

        <!--On fait les liens de nos boutons vers les pages à rpopos et portfolio-->
        <div>
            <button class="button" type="button" onclick="window.location.href='propos.php'">A propos</button>
            <button class="button" type="button" onclick="window.location.href='Blog/index.php'">Blog</button>
            <button class="button" type="button" onclick="window.location.href='portfolio.php'">Portfolio</button>
        </div>

    </div>

</main>

</body>
</html>