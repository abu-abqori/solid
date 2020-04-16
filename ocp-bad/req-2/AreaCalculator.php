<?php

class AreaCalculator
{

    function areaRectangle($width, $height)
    {
        return $width * $height;
    }

    function areaCircle($radius)
    {
        return $radius * $radius * M_PI;
    }
}
