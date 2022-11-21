<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function PHPUnit\Framework\returnSelf;

class sugerencia extends Model
{
    use HasFactory;

    public function empresa()
    {
        return $this->belongsTo(empresa::class,'empresaId');
    }
}
