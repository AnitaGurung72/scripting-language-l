<?php
$file = fopen("essay.txt", "r") or die("Unable to open file!");
$wordCount = 0;
$inWord = false;

while (!feof($file)) {
    $char = fgetc($file);
    if ($char !== false) {
        if ($char == ' ' || $char == "\n" || $char == "\t" || $char == "\r") {
            if ($inWord) {
                $wordCount++;
                $inWord = false;
            }
        } else {
            $inWord = true;
        }
    }
}

if ($inWord) {
    $wordCount++;
}

fclose($file);

echo "Word count: " . $wordCount;
?>