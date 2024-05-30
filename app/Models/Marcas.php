<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marcas extends Model
{
    protected $table = 'Marca';

    protected $fillable = ['name', 'description', 'product_id'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
