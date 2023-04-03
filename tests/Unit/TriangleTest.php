<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Triangulo;

class TriangleTest extends TestCase
{
    public function test_AreaTriangulo(){
        $triangulo = new Triangulo();
        $triangulo->base = 10;
        $triangulo->altura = 10;
        $triangulo->area = $triangulo->getArea($triangulo->base, $triangulo->altura);
        $this->assertEquals(50, $triangulo->area);
      }
}
