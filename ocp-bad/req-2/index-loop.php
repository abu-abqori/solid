<?php
spl_autoload_register();

$areaCalculator = new AreaCalculator;

$shapes = [
    ['type' => 'rectangle', 'width' => 10, 'height' => 5],
    ['type' => 'circle', 'radius' => 6],
    ['type' => 'rectangle', 'width' => 3, 'height' => 1],
];

foreach ($shapes as $shape) {
    if ($shape['type'] == 'rectangle') {
        $areaRectangle = $areaCalculator->areaRectangle($shape['width'], $shape['height']);
        print($areaRectangle);
    } else {
        $areaCircle = $areaCalculator->areaCircle($shape['radius']);
        print($areaCircle);
    }
    print(PHP_EOL);
}