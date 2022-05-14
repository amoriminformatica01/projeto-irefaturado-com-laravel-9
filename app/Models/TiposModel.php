<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposModel extends Model
{
    use HasFactory;
    protected $table = 'tipos';
    public $timestamp = true;


    protected $fillable = [
        'tipo',
        'created_at',
        'updated_at',
    ];
}
