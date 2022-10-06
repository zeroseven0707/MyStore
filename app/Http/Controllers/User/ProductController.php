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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $data['product'] = Product::where('trending',1)->take(6)->get();
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
    public function checkout(Request $request){
        $idcart = Cart::where('user_id',Auth::id())->where('status',false)->first();
        $data= AddToCart::where('user_id',Auth::id())->where('status',false)->select("*", DB::raw('SUM(price) as total'))->groupBy('user_id')->first();
        $addtocart = AddToCart::where('user_id',Auth::id())->where('cart_id',$idcart->id)->where('status',false);
        $detrans = DetailTransaksi::create([
            'code_inv'=>Str::random(10),
            'user_id'=>Auth::id(),
            'cart_id'=>$idcart->id,
            'harga_total'=>$data['total'],
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
    public function editprofile(){
        $data['addres'] = User::where('id',Auth::id())->get();
        return view('frontend.updateprofile')->with($data);
    }
    public function updateprofile(Request $request){
       
        $data = User::where('id',Auth::id());
        if(!$request->hasFile('image')){
            $data->update([
                'firstname' =>$request->firstname,
                'lastname' =>$request->lastname,
                'nohp' =>$request->nohp,
                'addres1' =>$request->addres1,
                'addres2' =>$request->addres2,
                'city' =>$request->city,
                'state' =>$request->state,
                'country' =>$request->country,
            ]);
        }else {
            $data->update([
                'firstname' =>$request->firstname,
                'lastname' =>$request->lastname,
                'nohp' =>$request->nohp,
                'addres1' =>$request->addres1,
                'addres2' =>$request->addres2,
                'city' =>$request->city,
                'state' =>$request->state,
                'country' =>$request->country,
                'image' =>$request->file('image')->store('post/user'),
            ]); 
        }
        return back()->with('success','Updated profile successfully');
    }
    public function snap(Request $request){
            // Set your Merchant Server Key
             \Midtrans\Config::$serverKey = 'SB-Mid-server-gD6CIn5uzDRMVvdooi5H-isJ';
           // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
            \Midtrans\Config::$isProduction = false;
            // Set sanitization on (default)
            \Midtrans\Config::$isSanitized = true;
            // Set 3DS transaction for credit card to true
            \Midtrans\Config::$is3ds = true;
            
            $params = array(
                'transaction_details' => array(
                    'order_id' => rand(),
                    'gross_amount' => 10000,
                ),
                'customer_details' => array(
                    'first_name' => 'budi',
                    'last_name' => 'pratama',
                    'email' => 'budi.pra@example.com',
                    'phone' => '08111222333',
                ),
            );
            
            $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('indexbarang');
    }
}
