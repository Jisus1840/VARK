<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormularioVark extends Model
{
    use HasFactory;
    protected $table = "varks";
    protected $primary = "id";
    protected $fillable = [
        'respuesta',
        'folio',
        'userId'
    ];
}
