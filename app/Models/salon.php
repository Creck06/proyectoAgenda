<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class salon extends Model
{
    use HasFactory;
    public $table="Salons";
    protected $fillable =[
        'id',
        'Tamaño',
        'Direccion'
    ];
}
