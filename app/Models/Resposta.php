<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;
    protected $fillable = ['enunciado_id', 'alternativa_id', 'user_id'];
    public function alternativa(){
        return $this->belongsTo('App\Models\Alternativa');
    }
}
