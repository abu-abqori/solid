<?php
spl_autoload_register();

$areaCalculator = new AreaCalculator;

$areaRectangle = $areaCalculator->areaRectangle(10, 5);
$areaCircle = $areaCalculator->areaCircle(4);

print($areaRectangle);
print(PHP_EOL);
print($areaCircle);

