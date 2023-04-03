<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class triangulo extends Model
{
    use HasFactory;

    protected $fillable = ['base', 'altura', 'area'];

    public function getArea($base, $altura){
        $area = ($base * $altura)/2;
        return $area;
    }
}
