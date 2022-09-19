@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h1>Update Category</h1>
    </div>
    <div class="card-body">
        <form action="{{ url('update-category/in/'.$category['id']) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category['name'] }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $category['slug'] }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Description</label>
                    <textarea name="description" rows="3" class="form-control">{{ $category['description'] }}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                        <input type="checkbox" {{ $category['status'] == '1' ? 'checked':'' }} name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Popular</label>
                        <input type="checkbox" {{ $category['popular'] == '1' ? 'checked':'' }} name="popular">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Tile</label>
                    <input type="text" class="form-control" name="meta_title" value="{{ $category['meta_title'] }}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-control">{{ $category['meta_keywords'] }}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-control">{{ $category['meta_descrip'] }}</textarea>
                </div>
                <div class="col-md-12">
                    <img src="{{ asset('storage/'.$category['image']) }}" style="width: 100px" alt="">
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