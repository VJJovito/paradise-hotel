<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_reserva',
        'cod_quarto',
        'cod_hospede',
        'entrada',
        'saida',
        'flg_excluido'
    ];
}
