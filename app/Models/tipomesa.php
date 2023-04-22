<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipomesa extends Model
{
    use HasFactory;
    public $table="tipo_mesas";
    protected $fillable =[
        'id',
        'Descripcion'
    ];
}
