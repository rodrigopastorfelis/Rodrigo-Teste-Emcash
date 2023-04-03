<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retangulo extends Model
{
    use HasFactory;

    public function getArea($base, $altura){
        return $base * $altura;
    }
}
