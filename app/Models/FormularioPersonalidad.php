<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioPersonalidad extends Model
{
    use HasFactory;
    protected $table = 'personalidades';
    protected $primary = 'id';
    protected $fillable = [
        'resultado',
        'userId'
    ];
}
