<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes'; // Se o nome da tabela for diferente de 'clientes'

    protected $fillable = ['nome', 'cpf', 'tipo', 'mes'];
}
