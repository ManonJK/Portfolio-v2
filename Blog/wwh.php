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
        <h2>Hello World, Hola mundo</h2>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum porttitor enim quis dolor tempus, vel viverra enim tempor. Duis ullamcorper sagittis sagittis. Pellentesque commodo justo ut ante interdum, et gravida tortor volutpat. Phasellus cursus elit et risus sollicitudin, id viverra urna viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas at odio in odio maximus dapibus sed varius dolor. Praesent vel maximus nibh. Vivamus vitae turpis in ex blandit eleifend. Vivamus ullamcorper auctor ligula, eu imperdiet ex. Etiam risus ipsum, iaculis a dui et, accumsan viverra eros. Vestibulum iaculis neque non leo suscipit pretium. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam auctor blandit ex ac luctus. Nulla metus nibh, auctor id molestie quis, varius ac mi. Fusce molestie ex in odio lacinia, ac semper sem feugiat. Integer nec blandit nisi, eget porta felis.
        </p><br>
        <p>
            Integer convallis tortor eu nisi volutpat vehicula. Etiam quis odio tellus. Pellentesque dignissim nunc enim, sed viverra libero blandit non. Sed tincidunt justo quis quam tempor, a sodales metus sodales. Aliquam erat volutpat. Curabitur scelerisque ligula sit amet augue tincidunt tempor. Suspendisse potenti. Phasellus id commodo velit. Morbi vitae odio gravida, fermentum ligula ut, pharetra felis.
        </p><br>
        <p>
            Proin consectetur tortor mattis, sollicitudin odio eget, volutpat justo. Nunc sed nisi non magna elementum molestie at vel ipsum. Sed dui justo, mollis lobortis nibh sit amet, tincidunt aliquam justo. Praesent porta nulla at elementum blandit. Nulla placerat enim id pharetra blandit. Nulla fringilla pellentesque pharetra. In elementum magna a velit pretium, aliquam varius eros sodales. Praesent metus tellus, dictum sed sapien vel, faucibus egestas dui. Aliquam placerat sapien mattis massa faucibus congue.
        </p><br>

        <iframe width="500px" height="300px" src="https://www.youtube.com/embed/p-MXpdFWWCM" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <p>
            Integer lacus mi, dapibus vel lorem tempor, congue fermentum orci. Pellentesque a lacus in elit hendrerit dignissim id in dui. Maecenas dictum maximus aliquam. Fusce pellentesque justo at quam aliquam, a porta mi pulvinar. Mauris quis vulputate neque. Nunc quis auctor nisl. Nunc tempus elit eget ligula tincidunt, eu semper massa pellentesque.
        </p><br>
        <p>
            Vivamus sit amet lacinia enim. Vivamus interdum interdum neque. Etiam mi dolor, pharetra vel erat quis, sodales tristique massa. Pellentesque eu molestie lectus. Aenean leo massa, bibendum non maximus id, fermentum non nibh. Sed fringilla consectetur viverra. Donec molestie leo ex. Vestibulum tempor ornare odio, ut congue leo. Pellentesque non magna sit amet orci dapibus condimentum. Integer eleifend, diam vel convallis tristique, leo ex faucibus lacus, vitae malesuada lorem nulla ut mauris. Donec euismod mi lectus, nec pharetra turpis tincidunt vel. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In eget sapien dapibus, malesuada justo posuere, viverra ante. Vivamus lacinia cursus iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        </p><br>
        <p>
            Integer consectetur fringilla fringilla. Sed hendrerit sollicitudin pretium. Nam congue ante eu lobortis maximus. Proin ac felis eu erat ullamcorper aliquam. Pellentesque bibendum eleifend sem, ut blandit felis convallis et. Nulla eleifend elit quis tellus tincidunt ultricies. Nulla quis porttitor turpis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc id enim ut est interdum fringilla nec at ipsum.
        </p><br>
        <p>
            Aenean feugiat nisi vitae purus finibus vulputate. Sed dignissim tincidunt aliquet. Suspendisse sed turpis consectetur, pretium nibh ut, condimentum massa. Fusce dictum vulputate nunc, nec egestas urna venenatis sit amet. Nulla in mauris sit amet est imperdiet feugiat. Nullam cursus rhoncus nulla, ut mattis erat feugiat in. Proin nec consequat velit. Quisque et ultricies mauris.
        </p><br>
        <p>
            Aliquam eu libero et quam dictum posuere. Fusce nec ante vel enim bibendum maximus vitae vel purus. In malesuada accumsan ligula, sed ultrices purus ullamcorper non. Aenean ac neque nisl. Nullam dapibus magna nec semper tristique. Aliquam a nulla sed nunc porttitor iaculis sit amet quis justo. In ut nisl quis est facilisis placerat ac at ex. Mauris sit amet ipsum nec sapien luctus gravida.
        </p>
    </div>

</main>

<?php //#On inclut le footer
//include ('../footer.php');
//?>

</body>
</html>