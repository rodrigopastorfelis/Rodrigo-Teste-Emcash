<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Retangulo;
use App\Models\Triangulo;
use App\Http\Requests\CreateTrianguloRequest;
use App\Http\Requests\CreateRetanguloRequest;

class BaseController extends Controller
{
    public function triangulo(CreateTrianguloRequest  $request)
    {
        try{
         Triangulo::Create([
            'base' => $request->base,
            'altura' => $request->height,
            'area' => ($request->base * $request->height)/2,
        ]);
        }catch(\Exception $e){
            return 'Erro ao cadastrar triangulo, verifique se os dados estão corretos';
        }

        return 'Triangulo cadastrado com sucesso';
    }

    public function retangulo(CreateRetanguloRequest $request)
    {
        try{
        Retangulo::Create([
            $request->validated(),
            'base' => $request->base,
            'altura' => $request->height,
            'area' => $request->base * $request->height,
        ]);
        }catch(\Exception $e){
            return 'Erro ao cadastrar retangulo, verifique se os dados estão corretos.';
        }
        
        return 'Retangulo cadastrado com sucesso';
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
