<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImoveisModel extends Model
{
    use HasFactory;
    protected $table = 'imoveis';
    public $timestamp = true;


    protected $fillable = [
        'descricao',
        'categoria',
        'codigo',
        'tipo',
        'imagem_principal',
        'imagem_1',
        'imagem_2',
        'imagem_3',
        'imagem_4',
        'imagem_5',
        'imagem_6',
        'preco',
        'bairro',
        'cidade',
        'estado',
        'tamanho',
        'quartos',
        'banheiros',
        'vagas',
    ];
}
