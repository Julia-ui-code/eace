<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enunciado extends Model
{
    use HasFactory;
    protected $fillable = ['enunciado', 'perguntas_id'];
    public function perguntas(){
        return $this->belongsTo('App\Models\Perguntas');
    }
    public function alternativa(){
        return $this->hasMany('App\Models\Alternativa');
    }
}
