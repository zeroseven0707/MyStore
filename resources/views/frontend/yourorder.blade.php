@extends('layouts.front')
@section('content')
<section class="d-flex flex-column gap-4">
    @php
        $total = 0;
        @endphp
    @foreach ($transaksi  as $item)
    <div class="card shadow">
    @if ($item['status'] == 'pending')
        <div class="bg-danger rounded" style="height: 40px"></div>
    @else
        <div class="bg-success rounded" style="height: 40px"></div>
    @endif  
        <div class="card-body">
            <div class="row row-cols-4 d-flex align-items-center mt-3">
               <b>    
                   {{ $item['created_at'] }}
               </b>
                <table class="table">
                    <tr>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Qty</th>
                        <th>Harga</th>
                    </tr>
                    @foreach ($item->cart->addtocart as $i)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'.$i->product->image) }}" alt="" style="width:25%;height:25%;">
                        </td>
                        <td>
                            {{ $i->product->name }}
                        </td>
                        <td>
                            {{ $i->qty }}
                        </td>
                        <td>
                            {{ $i->product->selling_price }}
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer d-flex">
            <b>Total</b>
            <p class="ms-auto">
                {{ $item['harga_total'] }}
            </p>
        </div>
    </div>
    @php
         $total += $item['harga_total']
    @endphp
    @endforeach
    <b>total pengeluaran : {{ $total }}</b> 
    @endsection
</section>