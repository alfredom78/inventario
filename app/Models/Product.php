<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Se guarda en constantes los estados del inventario
    const CON_INVENTARIO = 1;
    const SIN_INVENTARIO = 2;

    //Se habilita la asignacion masiva a la tabla products
    protected $guarded = ['id', 'created_at', 'updated_at'];

    //Relacion N:N con el modelo Category
    public function categories(){

        return $this->belongsToMany(Product::class);
    }
}
