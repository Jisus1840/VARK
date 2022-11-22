<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userEmpresa extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function empresa()
    {
        return $this->belongsTo(empresa::class,'empresaId');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'userId');
    }
}
