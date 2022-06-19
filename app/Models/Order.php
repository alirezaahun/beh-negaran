<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $guarded = [];

    public function userPayment(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function OrderItems(){
        return $this->hasMany(OrderItem::class,'order_id');
    }

    public function TransActions(){
        return $this->hasMany(Transaction::class , 'order_id');
    }
}
