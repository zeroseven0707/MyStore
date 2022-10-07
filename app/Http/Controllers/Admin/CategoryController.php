<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){
        $data['category'] = Category::all();
        return view('admin.category.index')->with($data);
    }
    public function add(){
        return view('admin.category.add');
    }
    public function insert(Request $request){
        $slug = Str::random(40);
        $category = Category::create([
            'name' =>$request->name,
            'slug' =>$slug,
            'description' =>$request->description,
            'popular' =>$request->popular == TRUE ? '1' :'0',
            'image' =>$request->file('image')->store('post/category'),
            'meta_title' =>$request->meta_title,
            'meta_keywords' =>$request->meta_keywords,
            'meta_descrip' =>$request->meta_description,
        ]);
        return redirect('dashboard')->with('status','added category successfully');
    }
    public function appearanceupdate($id){
        $data['category'] = Category::find($id);
        return view('admin.category.update')->with($data);
    }
    public function update($id,Request $request){
        $category = Category::find($id);
        if ($request->hasFile('image')) {
            $path = 'storage/'.$category['image'];
            if (File::Exists($path)) {
                File::delete($path);
            }
        }
        $slug = Str::random(40);
        $category->update([
            'name' =>$request->name,
            'slug' =>$slug,
            'description' =>$request->description,
            'popular' =>$request->popular == TRUE ? '1' :'0',
            'image' =>$request->file('image')->store('post/category'),
            'meta_title' =>$request->meta_title,
            'meta_keywords' =>$request->meta_keywords,
            'meta_descrip' =>$request->meta_description,
        ]);
        return redirect('/dashboard')->with('status','Category Updated Successfully');
    }
    public function destroy($id){
        $category = Category::find($id);
        if ($category['image']) {
            $path = 'storage/'.$category['image'];
            if (File::Exists($path)) {
                File::delete($path);
            }
        }
        $category->delete();
        return redirect('categories')->with('status','Category Deleted Successfully');
    }
}
