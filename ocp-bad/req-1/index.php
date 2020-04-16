<?php
spl_autoload_register();

$areaCalculator = new AreaCalculator;

$area = $areaCalculator->areaRectangle(10, 5);

print($area);
