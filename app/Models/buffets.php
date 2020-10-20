<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buffets extends Model
{
    use HasFactory;

    protected $table='buffets';

    protected $fillable=
    [
        'nome',
        'descricao',
        'valor',
        'endereco',
        'telefone',
    ];
}
