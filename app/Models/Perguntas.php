<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perguntas extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];
    public function enunciado(){
        return $this->hasMany('App\Models\Enunciado');
    }
}
