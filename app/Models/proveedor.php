<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table="proveedores";
    use HasFactory;

    public function productos(){
        return $this->BelongsToMany('App\Models\Producto');
    }
}
