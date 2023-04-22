<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposilla extends Model
{
    use HasFactory;
    public $table="tipo_sillas";
    protected $fillable =[
        'id',
        'Descripcion'
    ];
}
