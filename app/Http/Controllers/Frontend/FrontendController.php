<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $data['product'] = Product::where('trending',1)->take(15)->get();
        return view('frontend.index')->with($data);
    }
}
