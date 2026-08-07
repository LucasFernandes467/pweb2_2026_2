<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\Hasfactory;

class Aluno extends Model
{
use HasFactory;
protected $fillable = [
        'nome',
        'cpf',
        'telefone'
    ];
}
