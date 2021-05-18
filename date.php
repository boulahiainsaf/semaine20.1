

<?php
//ex1 date d'aujourd'hui:
$tabJours = ["lundi", "mardi", "mercredi",
    "jeudi", "vendredi", "samedi",
    "dimanche"];

$tabMois = ["janvier", "février", "mars", "avril", "mai",
    "juin", "juillet", "août", "septembre", "octobre",
    "novembre", "décembre"];
$today = new DateTime();
$jour = $today->format('N') - 1;

$mois = $today->format('m') - 1;
echo "Le ".$tabJours[$jour]." ".$today->format('d')." ".$tabMois[$mois]." ".$today->format('Y')."."."<br>";
?>

<?php

$todayy = new DateTime('2019-07-14');;
$week =$todayy->format('W');

echo "c'est la semaine numero : "." ".$week."<br>";



?>
<?php
$datFin= new datetime('29-10-2021');
$today=new datetime();
$jourFIN = $datFin ->format('z');
$todayy = $today->format('z');
$rest=($jourFIN-$todayy)-1;
echo "il reste "." ".$rest."  jours dans la formation"."<br>";
?>
<?php
$today = time();
$finForm = intval(mktime(0, 0, 0, 10, 29, 2021));
$temps = intval(($finForm - $today) / 86400);
echo "Il reste ".$temps." jours."."<br>";
?>
<?php
$today =new datetime();
$year= $today->format('Y');
$y=$year%4;
do {
    $year++;
    $y=$year%4;
} while($y!= 0);
echo "la prochaine année bissextile est : ".$year;
?>



