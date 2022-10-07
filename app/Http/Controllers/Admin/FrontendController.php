<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\DetailTransaksi;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index(){
        $user['user'] = User::count();
        $user['category'] = Category::count();
        $user['product'] = Product::count();
        $user['pengeluaran'] = Product::select("*", DB::raw('SUM(original_price) as pengeluaran'))->get();
        $user['pendapatan'] = DetailTransaksi::select("*", DB::raw('SUM(harga_total) as pendapatan'))->get();
        return view('admin.index')->with($user);
    }
    public function tablelist(){
        $data['user'] = User::all();
        return view('admin.tablelist')->with($data);
    }
    public function search(Request $request){
        $cari = '%'.$request->tcari.'%';
        $data['user'] = User::where('name','like',$cari)
        ->orWhere('firstname','like',$cari)
        ->orWhere('lastname','like',$cari)
        ->orWhere('email','like',$cari)
        ->orWhere('addres1','like',$cari)
        ->orWhere('addres2','like',$cari)
        ->orWhere('id','like',$cari)
        ->orWhere('city','like',$cari)
        ->orWhere('state','like',$cari)
        ->orWhere('country','like',$cari)
        ->orWhere('nohp','like',$cari)
        ->orWhere('role_as','like',$cari)
        ->get();
        return view('admin.tablelist')->with($data);
    }
    public function searchproducts(Request $request){
        $cari = '%'.$request->tcari.'%';
        $data['product'] = Product::where('name','like',$cari)
        ->orWhere('meta_keywords','like',$cari)
        ->get();
        return view('admin.product.index')->with($data);
    }
    public function searchcategories(Request $request){
        $cari = '%'.$request->tcari.'%';
        $data['category'] = Category::where('name','like',$cari)
        ->orWhere('meta_keywords','like',$cari)
        ->get();
        return view('admin.category.index')->with($data);
    }
}
