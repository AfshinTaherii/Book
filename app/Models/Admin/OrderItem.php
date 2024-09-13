<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $guarded = ['id'];
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

}
