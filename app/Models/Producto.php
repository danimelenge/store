<?php

namespace App\Models;

use App\Models\Marca;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'stock',
        'marca_id',  // Cambié 'MarcaId' a 'marca_id'
    ];

    // Relación con la categoría
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    // Relación con la marca
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id', 'id');
    }
}


