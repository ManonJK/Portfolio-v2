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

<main>
    <div class="container">
        <div class="contact-section">
            <div id="titre"><h1 class="ct-section-head">Contactez-moi</h1></div>
            <div class="row contact-fields">
                <?php
                if(isset($msg))
                {
                    echo $msg;
                }
                ?>
                <div class="col-md-8 left-form">
                    <form method="post" action="">
                        <div class="form-group">
                            <label class="sr-only" for="fname">Prénom *</label>
                            <input class="required form-control" id="fname" name="fname" placeholder="Prénom&nbsp;*" type="text"  required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="lname">Nom *</label>
                            <input class="required form-control" id="lname" name="lname" placeholder="Nom&nbsp;*" type="text"  required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="mail">Email *</label>
                            <input class="required form-control h5-email" id="contactEmail" name="mail" placeholder="Email&nbsp;*" type="text"  required>
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="message">Ecrivez votre message ici</label>
                            <textarea class="required form-control" id="message" name="message" placeholder="Ecrivez votre message ici&nbsp;*" rows="6" required></textarea>
                        </div>
                        <button class="btn btn-accent" type="submit" name="mailform">Envoyer</button>
                    </form>
                </div>


                <?php
                if(isset($_POST['mailform']))
                {
                    if(!empty($_POST['lname']) AND !empty($_POST['fname']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
                    {
                        $header="MIME-Version: 1.0\r\n";
                        $header.='Content-Type:text/html; charset="uft-8"'."\n";
                        $header.='Content-Transfer-Encoding: 8bit';

                        $message='
                            <html>
                                <body>
                                    <div align="center">
                                        <u>Nom de l\'expéditeur :</u>'.$_POST['fname'].' '.$_POST['lname'].'<br />
                                        <u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
                                        <br />
                                        '.nl2br($_POST['message']).'
                                        </div>
                                </body>
                            </html>
                        ';

                        mail("julienkuentzmanon@gmail.com", "CONTACT - Mon site", $message, $header);
                        $msg="Votre message a bien été envoyé !";
                    }

                }
                ?>


                <div class="col-md-4 contact-info">
                    <div class="phone">
                        <h2>Téléphone</h2>
                        <a href="tel:+33626103528">06.26.10.35.28</a>
                    </div>
                    <div class="email">
                        <h2>Email</h2>
                        <a href="mailto:julienkuentzmanon@gmail.com">julienkuentzmanon@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>

</main>


</body>
</html>
