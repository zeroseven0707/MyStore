<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AddToCart;
use App\Models\Cart;
use App\Models\DetailTransaksi;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $data['product'] = Product::where('trending',1)->take(15)->get();
        return view('frontend.product.index')->with($data);
    }
    public function detail($slug){
        $product['product'] = Product::where('slug',$slug)->get();
        return view('frontend.product.detail_product')->with($product);
    }
    public function profile(Request $request){
      $user =  User::where('user_id',Auth::id())->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'nohp' => $request->nohp,
            'email' => $request->email,
            'addres1' => $request->addres1,
            'addres2' => $request->addres2,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
        ]);
        $password = $request->password;
        if ($user) {
            if (Hash::check($password, $user->password)) {
                return back()->with('message','berhasil verifikasi');
            }else {
                return back()->with('message','Gagal, Password Salah');
            }
        }else{
            return back()->with('message','gagal update profile');
        }
    }
    public function checkout(){
        $idcart = Cart::where('user_id',Auth::id())->where('status',false)->first();
        $addtocart = AddToCart::where('user_id',Auth::id())->where('cart_id',$idcart->id)->where('status',false);
        $detrans = DetailTransaksi::create([
            'code_inv'=>Str::random(10),
            'user_id'=>Auth::id(),
            'cart_id'=>$idcart->id,
        ]);
        if ($detrans) {        
            $addtocart->update([
                 'status'=>true
            ]);
            $idcart->update([
                'status'=>true
            ]);
        }
        return redirect('/');
    }
}
