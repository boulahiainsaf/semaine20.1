
<!DOCTYPE >
<html>

<head>
    <meta charset="utf-8" />
    <title>jarditou</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>

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
                        <a class="nav-link" href="index.html">Acceuil<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tab.html">Tableau</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Cantact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Votre promotion">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                </form>
            </div>
        </nav>
        <img src="images/promotion.jpg" alt="promotion" width="100%">

        <form  method="post" enctype="multipart/form-data">
            <h1>Téléchargement un document</h1>
            <label for="fileUpload">ID du produit</label>
            <input class="form-control form-control-sm" type="text" name="IDproduit">
            <label for="fileUpload">Votre fichier à télécharger</label>
            <input class="form-control form-control-sm" type="file" name="photo" id="fileUpload"><br/>
            <input type="submit" name="submit" value="Upload">
            <p><strong>Note:</strong> Seuls les formats .jpg, .jpeg, .jpeg, .gif, .png sont autorisés jusqu'à une taille maximale de 5 Mo.</p>
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
        

        <?php
$aMimeTypes = array("image/gif", "image/jpeg", "image/pjpeg", "image/png", "image/x-png", "image/tiff");
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mimetype = finfo_file($finfo, $_FILES["photo"]["tmp_name"]);
finfo_close($finfo);
$filesize = $_FILES["photo"]["error"];
echo"".$filesize;
if ($_FILES["photo"]["error"]==0) { 
    echo"pas d'erreur";
 }else{
     echo"erreure num: ".$filesize;
 } 
if (in_array($mimetype, $aMimeTypes))
{
    echo "Votre fichier a été téléchargé avec succès.";
    //var_dump($_FILES);
} 
else 
{
echo "Type de fichier non autorisé";    
   exit;
}
$idproduit=$_POST['IDproduit'];
move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/$idproduit.jpg");    

?>
    </body>


</html>