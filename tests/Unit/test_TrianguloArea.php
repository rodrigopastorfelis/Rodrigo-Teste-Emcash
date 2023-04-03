<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Triangulo;

class test_TrianguloArea extends TestCase
{
    public function teste_area_triangulo(){
        $triangulo = new triangulo();
        $triangulo->base = 10;
        $triangulo->altura = 10;
        $triangulo->area = $triangulo->getArea($triangulo->base, $triangulo->altura);
        $this->assertEquals(50, $triangulo->area);
      }
}
