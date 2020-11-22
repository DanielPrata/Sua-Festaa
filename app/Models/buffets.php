<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buffets extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=
    [
        'nome',
        'descricao',
        'valor',
        'endereco',
        'telefone',
        'email',
        'tipo',
        'residencial',
        'casamento',
        'infantil',
        'debutante',
        'dj',
        'lembrancinha',
        'comida',
        'brinquedo',
        'images',
        'anunciante'
    ];
    protected $table='buffets';
}
