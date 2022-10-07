@extends('layouts.admin')
@section('content')
<div class="card">
    <table class="table table-responsive-xxl">
        <tr>
            <th>Image</th>
            <th>username</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>No Hp</th>
        </tr>
        @foreach ($user as $item)
        <tr>
            <td><img src="{{ asset('storage/'.$item['image']) }}" alt="" style="width: 10%; height: 10%;"></td>
            <td>{{ $item['name'] }}</td>
            <td>{{ $item['firstname'] }} {{ $item['lastname'] }}</td>
            <td>{{ $item['email'] }}</td>
            <td>{{ $item['addres1'] }} {{ $item['addres2'] }}</td>
            <td>{{ $item['no_telp'] }}</td>
        </tr>
        @endforeach
    </table>
</div>
    
@endsection