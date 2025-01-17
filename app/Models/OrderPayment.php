<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderPayment extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table='order';


    public function items()
    {
        return $this->hasMany(OrderItems::class, 'order_id');
    }
}
