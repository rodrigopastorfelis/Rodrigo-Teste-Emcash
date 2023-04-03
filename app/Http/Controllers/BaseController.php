<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\retangulo;
use App\Models\triangulo;
use GuzzleHttp\Promise\Create;
use App\Http\Requests\CreateTrianguloRequest;
use App\Http\Requests\CreateRetanguloRequest;

class BaseController extends Controller
{
    public function triangulo(CreateTrianguloRequest  $request)
    {
        try{
        $triangulo = triangulo::Create([
            'base' => $request->base,
            'altura' => $request->altura,
            'area' => ($request->base * $request->altura)/2,
        ]);
        $triangulo->save();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }

    public function retangulo(CreateRetanguloRequest $request)
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
