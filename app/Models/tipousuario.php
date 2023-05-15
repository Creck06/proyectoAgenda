<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipousuario extends Model
{
    use HasFactory;
    public $table="tipousuarios";
    protected $fillable =[
        'id',
        'Descripcion'
    ];}
