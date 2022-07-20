<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eletrodomesticos extends Model
{
    
    protected $fillable = [
        'name',
        'descricao',
        'tensao',
        'marca',
    ];
}
