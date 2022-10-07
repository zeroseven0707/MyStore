@extends('layouts.front')
@section('content')
@if ($message = session()->get('error'))    
<div class="alert alert-danger" role="alert">
  {{ $message }}
</div>
@endif
<div class="row row-cols-1">
    <div class="col-md-7">
    <div class="card">
        <div class="card-body bg-light">
            Basic Details
            <hr>
            <form action="{{ route('updateprofile') }}" method="post" enctype="multipart/form-data">
                @csrf
                @foreach ($addres as $item)
                <div class="row row-cols-2 g-4 mt-1" style="font-size: 13px">
                    <div class="col">
                        <label for="firstname">First Name :</label>
                        <input type="text" name="firstname" class="form-control" id="firstname" value="{{ $item['firstname'] }}">
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name :</label>
                        <input type="text" name="lastname" class="form-control" id="lastname" value="{{ $item['lastname'] }}">
                    </div>
                    <div class="col">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" id="email" value="{{ $item['email'] }}">
                    </div>
                    <div class="col">
                        <label for="nohp">No Hp :</label>
                        <input type="number" name="nohp" class="form-control" id="nohp" value="{{ $item['nohp'] }}">
                    </div>
                    <div class="col">
                        <label for="addres1">Addres 1 :</label>
                        <input type="text" name="addres1" class="form-control" id="addres1" value="{{ $item['addres1'] }}">
                    </div>
                    <div class="col">
                        <label for="addres2">Addres 2 :</label>
                        <input type="text" name="addres2" class="form-control" id="addres2" value="{{ $item['addres2'] }}">
                    </div>
                    <div class="col">
                        <label for="city">City :</label>
                        <input type="text" name="city" class="form-control" id="city" value="{{ $item['city'] }}">
                    </div>
                    <div class="col">
                        <label for="state">State :</label>
                        <input type="text" name="state" class="form-control" id="state" value="{{ $item['state'] }}">
                    </div>
                    <div class="col">
                        <label for="country">Country :</label>
                        <input type="text" name="country" class="form-control" id="country" value="{{ $item['country'] }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-4">Simpan</button>
                @endforeach
            </form>
        </div>
    </div>
</div>
<div class="col-md-5">
    <div class="card">
        <div class="card-body">
            Order Details
            <hr>
    <table class="table table-striped mt-4">
        <tr>
            <th>Product</th>
            <th>Qty</th>
            <th>Price</th>
        </tr>
        @foreach ($cart as $item)
        <tr>
            <td>{{ $item->product['name'] }}</td>
            <td>{{ $item['tqty'] }}</td>
            <td>{{ $item->product['selling_price'] }}</td>
        </tr>
        @endforeach
        <tr>
            <th colspan="2">Total</th>
            @foreach ($total as $item)
            <th>{{ $item['total'] }}</th>
            @endforeach
        </tr>
    </table>
    <hr>
    <form action="{{ route('checkout') }}" method="post">
    @csrf
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="submit">Place Order</button>
    </div>
    </form>
</div>
</div>
</div>
</div>
@endsection