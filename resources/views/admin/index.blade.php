@extends('layouts.admin')
@section('content')
   <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header text-center">
                <b>Users Registrasi</b>
            </div>
            <div class="card-body text-center">
                <h2><b>{{ $user }}</b></h2>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header text-center">
                <b>Product</b>
            </div>
            <div class="card-body text-center">
                <h2><b>{{ $product }}</b></h2>
            </div>
        </div>
    </div>
   </div>
   <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header text-center">
                <b>Category</b>
            </div>
            <div class="card-body text-center">
                <h2><b>{{ $category }}</b></h2>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <div class="card-header text-center">
                <b>Pengeluaran</b>
            </div>
            <div class="card-body text-center">
                @foreach ($pengeluaran as $item)
                <h2><b>{{ $item['pengeluaran'] }}</b></h2>
                @endforeach
            </div>
        </div>
    </div>
   </div>
   <div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header text-center">
                <b>Pendapatan</b>
            </div>
            <div class="card-body text-center">
                @foreach ($pendapatan as $dapatan)
                <h2><b>{{ $dapatan['pendapatan'] }}</b></h2>
                @endforeach
            </div>
        </div>
    </div>
   </div>
    
@endsection