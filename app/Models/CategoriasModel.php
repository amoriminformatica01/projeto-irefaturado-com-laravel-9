<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriasModel extends Model
{
    use HasFactory;

    protected $table = 'categorias';
    public $timestamp = true;


    protected $fillable = [
        'categoria',
        'created_at',
        'updated_at',
    ];
}
