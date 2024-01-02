<?php
    require_once '../vendor/autoload.php';
    use ColorThief\ColorThief;

    // Test 1
    $sourceImage = 'test1.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    echo 'Test 1' . PHP_EOL;
    echo implode(', ', $dominantColor) . PHP_EOL;

    // Test 2
    $sourceImage = 'test2.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    echo 'Test 2' . PHP_EOL;
    echo implode(', ', $dominantColor) . PHP_EOL;

    // Test 3
    $sourceImage = 'test3.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    echo 'Test 3' . PHP_EOL;
    echo implode(', ', $dominantColor) . PHP_EOL;

?>