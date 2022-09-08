<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shippinAddress extends Model
{
    use HasFactory;


    protected $fillable = [
        'order_id',
        'address',
        'city',
        'country',
        'shippingPrice',
    ];
}
