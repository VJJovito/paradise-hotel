<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospede extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_hospede',
        'nome',
        'cpf',
        'dt_nascimento',
        'flg_excluido'
    ];
}
