<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipodistribucion extends Model
{
    use HasFactory;
    public $table="tipo_distribucions";
    protected $fillable =[
        'id',
        'Descripcion'
    ];
}
