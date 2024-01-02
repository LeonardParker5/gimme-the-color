<?php
    require_once 'vendor/autoload.php';
    use ColorThief\ColorThief;

    $filePath = 'colors/colors.txt';
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $currentLine = $line;
        //echo $currentLine . PHP_EOL;
    }
?>