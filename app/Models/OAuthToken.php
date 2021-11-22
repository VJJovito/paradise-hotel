<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OAuthToken extends Model
{
    use HasFactory;

    protected $fillable = [
        'cod_oauth_token',
        'token',
        'cod_usuario',
        'flg_excluido'
    ];
}
