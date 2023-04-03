<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\retangulo;

class retangulo_area_Test extends TestCase
{
    public function teste_area_retangulo(){
        $retangulo = new retangulo();
        $retangulo->base = 10;
        $retangulo->altura = 10;
        $retangulo->area = $retangulo->getArea($retangulo->base, $retangulo->altura);
        $this->assertEquals(100, $retangulo->area);
    }
}
