<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table="productos";
    use HasFactory;

    public function subcategoria(){
        return $this->belongsTo('App\Models\Subcategoria');
    }

    public function iva(){
        return $this->belongsTo('App\Models\Iva');
    }
}
