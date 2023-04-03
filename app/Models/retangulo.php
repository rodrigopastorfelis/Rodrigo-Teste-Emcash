<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retangulo extends Model
{
    use HasFactory;
    protected $fillable = ['base', 'altura', 'area'];

    public function getArea($base, $altura){
        return $base * $altura;
    }
}
