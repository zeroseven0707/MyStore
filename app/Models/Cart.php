<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'status',
    ];
    public function addtocart(){
        return $this->hasMany(AddToCart::class, 'cart_id', 'id');
    }
}
