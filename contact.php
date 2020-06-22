<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Content-Type" content="UTF-8">
    <meta name="Content-Language" content="fr">
    <meta name="title" content="Kevin w web developpeur">
    <meta name="Description" content="Kevin w web developpeur">
    <meta name="Copyright" content="Kevin w">
    <meta name="Author" content="Kevin w ">
    <meta name="Identifier-Url" content="https://www.kevinw.be">
    <meta name="Category" content="internet">
    <meta name="keywords" content="fr">
    <meta name="robots" content="index, follow">
    <meta name="language" content="French">
    <title>Kevin W  | Contact</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <!--mes imports start-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">
    <script src="js/app.js"></script>
    <!--mes imports end-->

    <!-- import typed js start-->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.9"></script>
    <!-- import typed js end-->

    <!--bootstraàp start-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!--bootstrap end-->
</head>
<body>

    <!--header start-->
    <header id="header">

        <!--menu start-->
        <div class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <nav class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav container">
                    <li><a class="nav-item nav-link text-white col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" href="index.html">ACCUEIL<span class="sr-only">(current)</span></a></li>
                    <li><a class="nav-item nav-link text-white col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" href="competences.html">COMPETENCES</a></li>
                    <li><a class="nav-item nav-link text-white col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3" href="portfolio.html">PORTFOLIO</a></li>
                    <li><a class="nav-item nav-link text-white active col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 border-bottom border-light" href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <!--menu end-->

        <!--bloc titre 1 et logo start-->
        <div class="title-header">
            <figure>
                <a href="index.html">
                    <img src="img/logo.png" alt="logo kevinw web developpeur">
                </a>
                <figcaption class="hidden">logo kevinw web developpeur</figcaption>
            </figure>
            <legend class="hidden">logo kevinw web developpeur</legend>
            <!--titre 1 start-->
            <h1 class="text-center">
                Kévin w.
            </h1>
            <!--titre 1 end-->
        </div>
        <!--bloc titre 1 et logo end-->

        <!--titre defillant start-->
        <h2 class="title2"></h2>
        <script>var typed = new Typed('.title2', {
            strings: ["N'hésitez pas", "à me contacter", "pour un devis", "ou un renseignement."],
            typeSpeed: 60,
            backSpeed : 30,
            loop: true,
            });
    </script>
        <!--titre defillant end-->

        <!--boutton down start-->
            <a href="#accueil">
                <img src="img/bottom.png" alt="bottom">
            </a>
        <!--boutton down end-->

    </header>
    <!--header end-->

    <!--titre 3 section start-->
    <h3 class="title-3" id="accueil">Me contacter</h3>
    <!--titre 3 section end-->

    <!--section start-->
    <section class="section-contact container-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

    
        <!--formulaire de contact start-->
        <div id="contact">
            <h4>Formulaire de contact</h4>

<?php
include('script.php');
?>    
            <form method="post" action="">
                <input class="champ" type="text" name="nom" value="<?= (empty($_POST['nom'])) ? '' : $_POST['nom']; ?>" placeholder="Votre nom" /> 
                <br>
                <input class="champ" type="email" name="email" value="<?= (empty($_POST['email'])) ? '' : $_POST['email']; ?>" placeholder="Votre email" /> 
                <br>
                <textarea class="champ" name="message" placeholder="Votre message"><?= (empty($_POST['message'])) ? '' : $_POST['message']; ?></textarea> 
                <br>
                <input class="bouton" type="submit" name="valider" value="Envoyer" />
            </form>

    </div>
    <!--formulaire de contact end-->

    <!--réseaux sociaux start-->
    <div class="social container-fluid col-12 col-sm-12 col-md-10 col-lg-12 col-xl-12">

        <!--facebook start-->
        <div class="bloc col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" data-toggle="tooltip" data-html="bottom" title="KevinW sur Facebook">
            <figure>
                <a href="https://www.facebook.com/kevin.wiart.378" target="_blank">
                    <img src="img/128/facebook.png" alt="facebook kevinw">
                </a>
                <figcaption class="hidden">facebook kevinw</figcaption>
            </figure>
            <legend class="hidden">facebook kevinw</legend>
        </div>
        <!--facebook end-->

        <!--twitter start-->
        <div class="bloc col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" data-toggle="tooltip" data-html="bottom" title="KevinW sur Twitter">
            <figure>
                <a href="https://twitter.com/KevinW_DevWeb" target="_blank">
                    <img src="img/128/twitter.png" alt="twitter kevinw">
                </a>
                <figcaption class="hidden">twitter kevinw</figcaption>
            </figure>
            <legend class="hidden">twitter kevinw</legend>
        </div>
        <!--twitter end-->

        <!--github start-->
        <div class="bloc col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3"  data-toggle="tooltip" data-html="bottom" title="KevinW sur Github">
            <figure>
                <a href="https://github.com/Eosia" target="_blank">
                    <img src="img/128/github.png" alt="github kevinw">
                </a>
                <figcaption class="hidden">github kevinw</figcaption>
            </figure>
            <legend class="hidden">github kevinw</legend>
        </div>
        <!--github end-->

        <!--mail start-->
        <div class="bloc col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" data-toggle="tooltip" data-html="bottom" title="CONTACT@KEVINW.BE">
            <figure>
                <a href="mailto:contact@kevinw.be" target="_blank">
                    <img src="img/128/mail.png" alt="mail kevinw">
                </a>
                <figcaption class="hidden">mail kevinw</figcaption>
            </figure>
            <legend class="hidden">mail kevinw</legend>
        </div>
        <!--mail end-->

    </div>
        <!--réseaux sociaux end-->

    </section>
    <!--section end-->

    <!--footer start-->
    <footer>
        <p>2020©KEVINW.BE</p>
        <a href="#header"><img src="img/top.png" alt="remonter"></a>
    </footer>
    <!--footer end-->

    <!--audio start-->
    <audio src="mp3/1.mp3" id="my_audio" preload="auto" autoplay loop></audio>
    <script src="js/app.js"></script>
    <!--audio end-->

</body>
</html>