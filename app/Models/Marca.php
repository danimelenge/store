<?php

namespace App\Models;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Marca extends Model
{
    use HasFactory, SoftDeletes;

    // Relación con productos
    public function productos()
    {
        return $this->hasMany(Producto::class, 'marca_id', 'id');
    }
}


