@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Add Category</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('insert-product') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-ms-12 mb-3">
                     <select class="" aria-label="Default select example" name="category_id">
                        <option >Select a Category</option>
                        @foreach ($category as $item)
                        <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                        @endforeach
                     </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" id="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Original price</label>
                    <input type="number" name="original_price" class="form-control" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Selling price</label>
                    <input type="number" name="selling_price" class="form-control" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Quantity</label>
                    <input type="number" name="qty" class="form-control" id="">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Trending</label>
                        <input type="checkbox" name="trending">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Tile</label>
                    <input type="text" class="form-control" name="meta_title" id="">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control"></textarea>
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