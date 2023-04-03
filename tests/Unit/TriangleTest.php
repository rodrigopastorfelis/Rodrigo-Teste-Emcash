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
        try {
           is_numeric($triangulo->base);
        } catch (\Throwable $th) {
            return 'Base não é um número';
        }
        $triangulo->altura = 10;
        try {
            is_numeric($triangulo->altura);
         } catch (\Throwable $th) {
             return 'Altura não é um número';
         }

        $triangulo->area = $triangulo->getArea($triangulo->base, $triangulo->altura);
        $this->assertEquals(20, $triangulo->area);
      }
}
