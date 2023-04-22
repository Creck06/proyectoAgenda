<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoevento extends Model
{
    use HasFactory;
    public $table="tipo_eventos";
    protected $fillable =[
        'id',
        'Descripcion'
    ];
}
