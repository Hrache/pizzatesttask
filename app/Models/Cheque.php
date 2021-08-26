<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\ProductOption;

class Cheque extends Model
{
    use HasFactory, SoftDeletes;

    public function cheque_order_items()
    {
        return $this->hasMany(ChequeOrderItem::class, 'cheque_id', 'id')->with('product_option');
    }
}
