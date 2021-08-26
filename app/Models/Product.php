<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ProductOption;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name'
    ];

    public function product_options()
    {
        return $this->hasMany(ProductOption::class, 'product_id', 'id');
    }
}
