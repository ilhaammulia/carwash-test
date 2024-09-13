<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["customer_id", "service_id", "customer_name", "customer_phone", "service_name", "price", "discount_price", "total_price", "status"];

    public function customer()
    {
        return $this->belongsTo(Customer::class, "customer_id");
    }
}
