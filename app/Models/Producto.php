<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $table = 'inventario_productos.producto';

    const CREATED_AT = 'creado_en';
    const UPDATED_AT = 'actualizado_en';
}
