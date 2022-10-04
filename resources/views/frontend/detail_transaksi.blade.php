@extends('layouts.front')
@section('content')
<div class="row row-cols-1">
    <div class="col-md-7">
    <div class="card">
        <div class="card-body bg-light">
            Basic Details
            <hr>
            <form action="{{ route('profile') }}" method="post">
                @csrf
                <div class="row row-cols-2 g-4 mt-1" style="font-size: 13px">
                    <div class="col">
                        <label for="firstname">First Name :</label>
                        <input type="text" name="firstname" class="form-control" id="firstname">
                    </div>
                    <div class="col">
                        <label for="lastname">Last Name :</label>
                        <input type="text" name="lastname" class="form-control" id="lastname">
                    </div>
                    <div class="col">
                        <label for="email">Email :</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="col">
                        <label for="nohp">No Hp :</label>
                        <input type="number" name="nohp" class="form-control" id="nohp">
                    </div>
                    <div class="col">
                        <label for="addres1">Addres 1 :</label>
                        <input type="text" name="addres1" class="form-control" id="addres1">
                    </div>
                    <div class="col">
                        <label for="addres2">Addres 2 :</label>
                        <input type="text" name="addres2" class="form-control" id="addres2">
                    </div>
                    <div class="col">
                        <label for="city">City :</label>
                        <input type="text" name="city" class="form-control" id="city">
                    </div>
                    <div class="col">
                        <label for="state">State :</label>
                        <input type="text" name="state" class="form-control" id="state">
                    </div>
                    <div class="col">
                        <label for="country">Country :</label>
                        <input type="text" name="country" class="form-control" id="country">
                    </div>
                    <div class="col">
                        <label for="password">enter password to confirm :</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
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
            <td>{{ $item['qty'] }}</td>
            <td>{{ $item->product['selling_price'] }}</td>
        </tr>
        @endforeach
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