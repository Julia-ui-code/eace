<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextosResultado extends Model
{
    use HasFactory;
    protected $fillable = ['texto_resultado', 'curso_id'];
    public function cursos(){
        return $this->belongsTo('App\Models\Curso');
    }
}
