<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['price', 'product_id', 'status'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
