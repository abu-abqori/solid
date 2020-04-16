<?php

class Rectangle implements Shape
{

    private $width;
    private $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    function area()
    {
        return $this->width * $this->height;
    }
}
