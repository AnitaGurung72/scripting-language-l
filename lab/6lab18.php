<?php
$file = 'data.txt';
if(file_exists($file)){
    $contents = file_get_contents($file);
    echo $contents;
} else {
    echo "File does not exist.";
}
?>