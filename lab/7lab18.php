<?php
$file = fopen("search.txt", "r") or die("Unable to open file!");
while(!feof($file)) {
    $line = fgets($file);
    if(trim($line) == "STOP") {
        break;
    }
    echo $line . "<br>";
}
fclose($file);
?>