<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <title>jarditou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

<header>
    <div class="d-sm-none d-lg-block">
        <div class="row">
            <div class="col-8">
                <img src="images/jarditou_logo.jpg" alt="jarditou_logo" width="150">
            </div>
            <div class="col-4">
                <h2 class="text-center">La qualité depuis 70 ans</h2>
            </div>
        </div>
    </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Jarditou.com</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="accueil.php">Acceuil<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tableau.php">Tableau</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Cantact</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
        </form>
    </div>
</nav>
<img src="images/promotion.jpg" alt="promotion" width="100%">
<form action="valid.php" method="POST" enctype="multipart/form-data">
    <h6>* ces zones sont obligatoires</h6>
    <h2>Vos coordonnées</h2>
    <div class="form-group">
        <label for="Nom">Nom* :</label>
        <input class="form-control form-control-sm" type="text" name="Nom" id="Nom" value= "<?php if(isset($_POST["Nom"])){echo $_POST["Nom"];} ?>" >
        <div class="text-danger">
            <?php
            if(isset($nom)){
                echo"$erreur_nom";
            }
            ?>
        </div>
        <label for="prenom">prénom* :</label>
        <input class="form-control form-control-sm" type="text" name="prenom" id="prenom" value= "<?php if(isset($_POST["prenom"])){echo $_POST["prenom"];} ?>" >
        <div class="text-danger">
            <?php
            if(isset($prenom)){
                echo"$erreur_prenom";
            }
            ?>
        </div>
        <label from="mail">Email* :</label>
        <input class="form-control form-control-sm" type="text" name="mail" id="mail" value= "<?php if(isset($_POST["mail"])){echo $_POST["mail"];} ?>" >
        <div class="text-danger">
            <?php
            if(isset($mail)){
                echo"$erreur_mail";
            }
            ?>
        </div>
    </div>
    <label from="login">login* :</label>
    <input class="form-control form-control-sm" type="text" name="login" id="login" value= "<?php if(isset($_POST["login"])){echo $_POST["login"];} ?>" >
    <div class="text-danger">
        <?php
        if(isset($login)){
            echo"$erreur_login";
        }
        ?>
    </div>
        <label for="password">mots de passe* :</label>
        <input class="form-control form-control-sm" type="text" name="mPass" id="mPass" value= "<?php if(isset($_POST["mPass"])){echo $_POST["mPass"];} ?>" >
        <div class="text-danger">
            <?php
            if(isset($mPass)){
                echo"$erreur_mPass";
            }
            ?>
        </div>
    </div>
    <label for="password2">mots de passe* :</label>
    <input class="form-control form-control-sm" type="text" name="mPass2" id="mPass2" value= "<?php if(isset($_POST["mPass2"])){echo $_POST["mPass2"];} ?>" >
    <div class="text-danger">
        <?php
        if(isset($mPass2)){
            echo"$erreur_mPass2";
        }
        ?>
    </div>
    <div>
        <input type="submit" class="btn btn-dark btn-outline-primary" value="envoyer">
        <input type="reset" class="btn btn-dark btn-outline-primary" value="Annuler">
    </div>
</form>
<footer>
    <ul class="nav bg-dark" style="margin:auto">
        <li class="nav-link text-muted">mention l&egrave;gale</li>
        <li class="nav-link text-muted">horaire</li>
        <li class="nav-link text-muted">plan du site</li>
    </ul>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>

