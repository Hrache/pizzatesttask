<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOption extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'option_name',
        'product_id',
        'option_details',
        'price'
    ];

    /**
     * Product of the current product option
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    /**
     * Cheques of the current product
     */
    public function cheques()
    {
        return $this->hasMany(Cheque::class, 'product_option_id', 'id');
    }
}