<?php
spl_autoload_register();

$areaCalculator = new AreaCalculator;

$shapes = [];
$shapes[] = new Rectangle(10, 5);
$shapes[] = new Circle(6);
$shapes[] = new Rectangle(3, 1);
$shapes[] = new Triangle(4, 5);

foreach ($shapes as $shape) {
    $area = $areaCalculator->area($shape);
    print($area);
    print(PHP_EOL);
}
