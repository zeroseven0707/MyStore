<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddToCart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'cart_id',
        'qty',
        'price',
        'product_id',
        'status',
    ];
    protected $guarded = [];
    public function product(){
        return $this->belongsTo(Product::class,'product_id','id');
    }
    public function cart(){
        return $this->belongsTo(Cart::class,'cart_id','id');
    }
}
