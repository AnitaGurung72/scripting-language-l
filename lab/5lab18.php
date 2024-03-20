
<?php
$file = fopen("data.txt", "w") or die("Unable to open file!");
$txt = "Hello, World!";
fwrite($file, $txt);
fclose($file);
?>