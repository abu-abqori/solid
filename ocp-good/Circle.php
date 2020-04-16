<?php

class Circle implements Shape
{

    private $radius;

    function __construct($radius)
    {
        $this->radius = $radius;
    }

    function area()
    {
        return $this->radius * $this->radius * M_PI;
    }
}
