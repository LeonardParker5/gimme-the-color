<?php

    function getHexColorFromLine($line) {
        $parts = explode("\t", $line);
        $hexColor = trim($parts[0]);
        $hexColor = ltrim($hexColor, '#');
    
        return $hexColor;
    }

    function getColorNameFromLine($line) {
        $parts = explode("\t", $line);
        $colorName = trim($parts[1]);
    
        return $colorName;
    }

    function hexToRgbArray($hexColor) {  
        $red = hexdec(substr($hexColor, 0, 2));
        $green = hexdec(substr($hexColor, 2, 2));
        $blue = hexdec(substr($hexColor, 4, 2));
    
        $rgbArray = array($red, $green, $blue);

        return $rgbArray;
    }

    function euclideanDistance($point1, $point2) {
        if (count($point1) !== 3 || count($point2) !== 3) {
            return null;
        }

        $distance = abs(sqrt(
            pow($point2[0] - $point1[0], 2) +
            pow($point2[1] - $point1[1], 2) +
            pow($point2[2] - $point1[2], 2)
        ));
    
        return $distance;
    }

    function getBestColor($colorArr) {
        $bestColorName = "Black";
        $bestColorHex  = "000000";
        $bestColorVal = [0, 0, 0];
        $lines = file('../colors/colors.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

        echo 'Finding best color for: ';
        echo implode(', ', $colorArr) . PHP_EOL;

        foreach ($lines as $line) {
            $lineHex = getHexColorFromLine($line);
            $lineArr = hexToRgbArray($lineHex);
            if (euclideanDistance($lineArr, $colorArr) < euclideanDistance($bestColorVal, $colorArr)) {
                $bestColorVal = $lineArr;
                $bestColorHex = $lineHex;
                $bestColorName = getColorNameFromLine($line);
            }
        }

        echo "\nBest color found is: " . $bestColorName .
             " (" . $bestColorHex . ") " .
             "(" . implode(', ', $bestColorVal) . ")" . PHP_EOL;
    }

    require_once '../vendor/autoload.php';
    use ColorThief\ColorThief;

    // Test
    $sourceImage = 'test1.png';
    $dominantColor = ColorThief::getColor($sourceImage);
    getBestColor($dominantColor);

    /*
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
    */
?>