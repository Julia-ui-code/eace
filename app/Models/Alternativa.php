<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    use HasFactory;
    protected $fillable = ['alternativa', 'enunciado_id'];
    public function enunciado(){
        return $this->belongsTo('App\Models\Enunciado');
    }
    public function classifica(){
        return $this->hasMany('App\Models\Classifica');
    }
    public function resposta(){
        return $this->hasMany('App\Models\Resposta');
    }
}
