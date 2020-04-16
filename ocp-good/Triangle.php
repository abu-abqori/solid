<?php

class Triangle implements Shape
{

    private $base;
    private $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    function area()
    {
        return ($this->base * $this->height) / 2;
    }
}
