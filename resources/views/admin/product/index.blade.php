@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Category Page</h4>
        <hr>
    </div>
    <div class="card-body">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Selling Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item->category['name'] }}</td>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['selling_price'] }}</td>
                    <td><img src="storage/{{ $item['image'] }}" style="width: 60px; height:60px;" alt=""></td>
                    <td>
                        <a href="{{ url('update-product/'.$item['id']) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ url('delete-product/'.$item['id']) }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection