<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\retangulo;
use App\Models\triangulo;

class BaseController extends Controller
{
    public function triangulo(Request $request)
    {
        $triangulo = new triangulo();
        $triangulo->base = $request->base;
        $triangulo->altura = $request->altura;
        $triangulo->area = $triangulo->getArea($triangulo->base, $triangulo->altura);
        
        $triangulo->save();        
    }

    public function retangulo(Request $request)
    {
        $retangulo = new retangulo();
        $retangulo->base = $request->base;
        $retangulo->altura = $request->altura;
        $retangulo->area = $retangulo->getArea($retangulo->base, $retangulo->altura);

        
        $retangulo->save();        
    }

    public function resultado()
    {
        $triangulo = triangulo::all();
        $retangulo = retangulo::all();
        $resultado = 0;


        foreach ($triangulo as $triangulo) {
            $resultado +=  $triangulo->area;
        }
        foreach ($retangulo as $retangulo) {
            $resultado +=  $retangulo->area;
        }

        return "A área total de todos os polignos cadastrados: ". $resultado;

    }

    //
}
