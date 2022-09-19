@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Add Category</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('update-product/in/'.$product['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-ms-12 mb-3">
                     <select class="" aria-label="Default select example" name="category_id">
                        <option >Select a Category</option>
                        <option value="{{ $product->category['id'] }}">{{ $product->category['name'] }}</option>
                        @foreach ($category as $item)
                        <option value="{{ $category['id'] }}">{{ $category['name'] }}</option>
                        @endforeach
                     </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="" value="{{ $product['name'] }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" id="" value="{{ $product['slug'] }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ $product['description'] }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-control">{{ $product['small_description'] }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original price</label>
                    <input type="number" name="original_price" class="form-control" id="" value="{{ $product['original_price'] }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling price</label>
                    <input type="number" name="selling_price" class="form-control" id="" value="{{ $product['selling_price'] }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Tax</label>
                    <input type="number" name="tax" class="form-control" id="" value="{{ $product['tax'] }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" name="qty" class="form-control" id="" value="{{ $product['qty'] }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                        <input type="checkbox" {{ $product['status'] == '1' ? 'checked':'' }} name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                        <input type="checkbox" {{ $product['trending'] == '1' ? 'checked':'' }} name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Tile</label>
                    <input type="text" class="form-control" name="meta_title" id="" value="{{ $product['meta_title'] }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control">{{ $product['meta_keywords'] }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ $product['meta_description'] }}</textarea>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset('storage/'.$product['image']) }}" style="width: 100px" alt="">
                </div>
                <div class="col-md-12">
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>
    
@endsection