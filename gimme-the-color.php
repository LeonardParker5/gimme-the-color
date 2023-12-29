<?php
    require_once 'vendor/autoload.php';
    use ColorThief\ColorThief;

    // Test 1
    $sourceImage = 'tests/test1.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    echo 'Test 1' . PHP_EOL;
    print_r($dominantColor);

    // Test 2
    $sourceImage = 'tests/test2.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    echo 'Test 2' . PHP_EOL;
    print_r($dominantColor);

    // Test 3
    $sourceImage = 'tests/test3.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    echo 'Test 3' . PHP_EOL;
    print_r($dominantColor);

    $filePath = 'colors/colors.txt';
    $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach ($lines as $line) {
        $currentLine = $line;
        //echo $currentLine . PHP_EOL;
    }
?>