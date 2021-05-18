<?php





$fp = fopen("liens.txt", "r");
while (!feof($fp))
{
    $lien = fgets($fp, 100);
    echo "<a href=\"$lien\">".$lien."</a><br>";
}
fclose($fp);



?>