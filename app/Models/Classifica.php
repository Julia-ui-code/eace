<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classifica extends Model
{
    use HasFactory;
    protected $fillable = ['alternativa_id', 'curso_id', 'porcentagem'];
    public function curso(){
        return $this->belongsTo('App\Models\Curso');
    }
    public function alternativa(){
        return $this->belongsTo('App\Models\Alternativa');
    }
}
