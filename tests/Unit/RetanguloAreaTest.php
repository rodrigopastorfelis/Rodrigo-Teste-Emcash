<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Retangulo;

class RetanguloAreaTest extends TestCase
{
    public function test_AreaRetangulo(){
        $retangulo = new retangulo();
        $retangulo->base = 10;
        $retangulo->altura = 10;
        $retangulo->area = $retangulo->getArea($retangulo->base, $retangulo->altura);
        $this->assertEquals(100, $retangulo->area);
    }
}
