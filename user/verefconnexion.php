<?php

session_start();
$log=$_POST['login'];
$password =$_POST['password'];


if( $log == $_SESSION['Login'] && $password == $_SESSION['Motdepasse']){
    echo"Bonjour ".$_SESSION["login"]."<br>";

}
else{header('Location:connexion1.php?erreur=1');

}



