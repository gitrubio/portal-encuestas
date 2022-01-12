<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    protected $fillable = ['id','EncuestaNombre', 'TipoPregunta', 'Pregunta'];
}
