<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        $data['product'] = Product::all();
        return view('admin.product.index')->with($data);
    }
    public function add(){
        $data['category'] = Category::all();
        return view('admin.product.add')->with($data);
    }
    public function insert(Request $request){
        $slug = Str::random(40);
        Product::create([
            'category_id' =>$request->category_id,
            'name' =>$request->name,
            'slug' =>$slug,
            'small_description' =>$request->description,
            'description' =>$request->description,
            'trending' =>$request->trending == TRUE ? '1' :'0',
            'image' =>$request->file('image')->store('post/product'),
            'original_price' =>$request->original_price,
            'selling_price' =>$request->selling_price,
            'qty' =>$request->qty,
            'meta_title' =>$request->meta_title,
            'meta_keywords' =>$request->meta_keywords,
            'meta_description' =>$request->meta_description,
        ]);
        return redirect('dashboard')->with('status','added product successfully');
    }
    public function appearanceupdate($id){
        $data['product'] = Product::find($id);
        $data['category'] = Category::all();
        return view('admin.product.update')->with($data);
    }
    public function update($id,Request $request){
        $product = Product::find($id);
        if ($request->hasFile('image')) {
            $path = 'storage/'.$product['image'];
            if (File::Exists($path)) {
                File::delete($path);
            }
        }
        $slug = Str::random(40);
        $product->update([
            'category_id' =>$request->category_id,
            'name' =>$request->name,
            'slug' =>$slug,
            'small_description' =>$request->description,
            'description' =>$request->description,
            'trending' =>$request->trending == TRUE ? '1' :'0',
            'image' =>$request->file('image')->store('post/product'),
            'original_price' =>$request->original_price,
            'selling_price' =>$request->selling_price,
            'qty' =>$request->qty,
            'meta_title' =>$request->meta_title,
            'meta_keywords' =>$request->meta_keywords,
            'meta_description' =>$request->meta_description,
        ]);
        return redirect('/dashboard')->with('status','Product Updated Successfully');
    }
    public function destroy($id){
        $product = Product::find($id);
        if ($product['image']) {
            $path = 'storage/'.$product['image'];
            if (File::Exists($path)) {
                File::delete($path);
            }
        }
        $product->delete();
        return redirect('products')->with('status','Product Deleted Successfully');
    }
}
