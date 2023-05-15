<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;
    public $table="usuarios";
    protected $fillable =[
        'id',
        'TipoUsuario',
        'Nombre',
        'Correo',
        'Numero',
        'Direccion'
    ];
}
