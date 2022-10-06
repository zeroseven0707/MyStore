@extends('layouts.front')
@section('content')
<section class="d-flex flex-column gap-4">
    <div class="card shadow">
        <div class="card-body">
            @foreach ($cart as $item)
            <div class="row row-cols-5 d-flex align-items-center mt-3">
                <div class="col"><img src="storage/{{ $item->product['image'] }}" class="rounded-4" width="70" height="70" alt=""></div>
                <div class="col">{{ $item->product['name'] }}</div>
                <div class="col">{{ $item['price'] }}</div>
                <div class="col"><input type="text" style="width: 40px" class="text-center" value="{{ $item['tqty'] }}"></div>
                <div class="col">
                    <a href="/delete/{{ $item['id'] }}">
                        <button class="btn btn-danger" style="font-size: 12px;">
                             <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                              </svg>
                            Remove
                        </button>
                    </a>
                </div>
            </div>
            <hr>  
                @endforeach
        </div>
        <div class="card-footer d-flex">
            @foreach ($total as $item)
            <p>Total Price : {{ $item['total'] }}</p> <a href="{{ route('detrans') }}" class="ms-auto"><button class="btn btn-success">Checkout</button></a>
            @endforeach
        </div>
    </div>
</section>

@endsection