<?php

use App\Models\AddToCart;
use Illuminate\Support\Facades\Auth;

function cart(){
	
	$cart = AddToCart::where('user_id',Auth::id())->where('status',false)->groupBy('product_id')->get();
	echo $cart->count();
 
}