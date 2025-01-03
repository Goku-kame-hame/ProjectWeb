<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [

        "first_name",
        "last_name",
        "address",
        "phone",
        "email",
        "price",
        "user_id",
        "status"
    
    ];

    public $timestamps = true;
}
