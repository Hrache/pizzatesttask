<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cheque;
use App\Models\ProductOption;

class ChequeOrderItem extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'product_option_id',
        'quantity',
        'cheque_id'
    ];

    public function cheque()
    {
        return $this->hasOne(Cheque::class, 'cheque_id', 'id');
    }
    
    public function product_option()
    {
        return $this->hasOne(ProductOption::class, 'id', 'product_option_id')->with('product');
    }
}
