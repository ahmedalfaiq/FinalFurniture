<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'image',
        'details',
        'customer_id',
    ];

    /**
     * An order belongs to a customer (user).
     */
    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}