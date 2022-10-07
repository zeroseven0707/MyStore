<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AddToCart;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data['cart'] = AddToCart::where('user_id',Auth::id())->where('status',false)->select("*", DB::raw('SUM(qty) as tqty'))->groupBy('product_id')->get();
         $data['total'] = AddToCart::where('user_id',Auth::id())->where('status',false)->select("*", DB::raw('SUM(price) as total'))->groupBy('user_id')->get();
            return view('frontend.cart')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id,Request $request)
    {
        $cartcount = Cart::where('user_id',Auth::id())->where('status',false);
        if ($cartcount->count() == 0) {
            Cart::create([
                'user_id'=>Auth::id()
            ]);
        } 
       $idcart = Cart::where('user_id',Auth::id())->where('status',false)->first();
       $product = Product::find($id);
       $data = AddToCart::create([
            'user_id'=>Auth::id(),
            'cart_id'=>$idcart->id,
            'qty'=> $request->qty,
            'price'=> $product->selling_price,
            'product_id'=>$id,
        ]);
        return back()->with('message','Berhasil menambahkan Product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detrans()
    {
        $data['addres'] = User::where('id',Auth::id())->get();
        $data['total'] = AddToCart::where('user_id',Auth::id())->where('status',false)->select("*", DB::raw('SUM(price) as total'))->groupBy('user_id')->get();
        $data['cart'] = AddToCart::where('user_id',Auth::id())->where('status',false)->select("*", DB::raw('SUM(qty) as tqty'))->groupBy('product_id')->get();
        return view('frontend.detail_transaksi')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = AddToCart::where('id',$id)->first();
        if ($cart['user_id'] == Auth::id()) {
            $cart->delete();
        }else{
            return back();
        }
        return back();
    }
}
