<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\DateTimeInterface;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ["name", "phone", "milestones"];

    protected $casts = [
        "created_at" => "datetime:Y-m-d H:00",
    ];
}
