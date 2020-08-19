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
        <img src="../assets/images/webix_color.png" alt="webix">
    </div>

    <div id="title">
        <h1>Webix : le framework Javascript qui facilite la vie</h1>
        <h4>Posté le 15 septembre 2019</h4>
    </div>
    <div class="bloc">
        <h2>Webix : le framework professionnel</h2>
        <p>
            Webix est un framework Javascript que j'ai eu l'occasion de découvrir lors de mon stage à Gamned! (Lire l'article). J'ai été très surprise la première fois que je l'ai utilisée, et pas dans le mauvais sens ! En effet, la syntaxe est simple, courte, et très limpide.
        </p>
        <p>
            Voici un exemple pris sur le code snippet officiel de webix :
            <pre><code>
                var calendar1 = {
                date:new Date(2018,1,16),
                view:"calendar",
                events:webix.Date.isHoliday,
                timepicker:true
                };

                var calendar2 = {
                    date:new Date(2018,3,16, 8, 10),
                    view:"calendar",
                    events:webix.Date.isHoliday,
                    minuteStep: 10,
                    timepicker:true
                };

                var calendar3 = {
                    date:new Date(2018,3,16, 8, 35),
                    view:"calendar",
                    type:"time"
                };

                webix.ui({
                  type:"space", rows:[
                    {
                      type:"wide", cols:[
                          calendar1,
                          calendar2,
                          calendar3
                      ]
                    },
                    {}
                  ]
                });
            </code></pre>
        </p>
        <br>
        <p>
            Le résultat est impressionnant :
        </p>
        <img src="../assets/images/webix.jpg" alt="résultat du code précédent">

        <br>
        <br>
        <p>Si vous souhaitez tester, de nombreux exemples sont disponibles sur le code snippet : <a href="https://snippet.webix.com/basic">Ici</a></p>
        <p>Seul petit bémol que l'on peut donner à webix est son accessibilité. En effet, ce framework, bien que très performant, est relativement cher. Il y a certes un essai gratuit, mais il est clair que le tout reste bien plus accessible aux entreprises qu'aux développeurs freelance par exemple : </p>
        <img src="../assets/images/webix_price.JPG" alt="prix de webix">
        <br>
        <br><p>
            Si vous êtes intéressé par ce framework, je vous invite à aller visiter leur site : <a href="https://webix.com/">Par là</a>
        </p>

    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>