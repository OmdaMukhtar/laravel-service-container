<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Shapes\Triangle;
use App\Http\Controllers\Shapes\ShapeInterface;

class PintController extends Controller
{

    private $shape;

    public function __construct(ShapeInterface $shape)
    {
        $this->shape = $shape;
    }

    public function calculateArea(Request $request)
    {
        return 'area = '.$this->shape->area();
    }
}
