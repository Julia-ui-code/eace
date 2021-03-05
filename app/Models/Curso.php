<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $fillable = ['nome_curso'];
    public function classifica(){
        return $this->hasMany('App\Models\Classifica');
    }
    public function textos_resultados(){
        return $this->belongsTo('App\Models\TextosResultado');
    }
}
