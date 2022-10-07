<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_inv',
        'harga_total',
        'user_id',
        'cart_id',
        'status',
    ];

    public function cart(){
        return $this->belongsTo(Cart::class,'cart_id','id');
    }
}
