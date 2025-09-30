<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Furniture extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'name', 'description', 'category', 'color', 'size',
        'price', 'image', 'supplier_id', 'store_name'
    ];

    public function supplier()
    {
        return $this->belongsTo(User::class, 'supplier_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'furniture_id', 'id');
    }

    public function furnitureFindings()
    {
        return $this->hasMany(FurnitureFinding::class, 'furniture_id', 'id');
    }
}