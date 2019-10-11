<?php
namespace App\Http\Controllers\Shapes;
use  App\Http\Controllers\Shapes\ShapeInterface;

class Triangle implements ShapeInterface
{
    private $base;
    private $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return ($this->base * $this->height) / 2;
    }
}
