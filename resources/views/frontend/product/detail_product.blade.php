@extends('layouts.front')
@section('content')
<style>
    h6 {
    color: red;
    text-decoration: line-through;
  -webkit-animation: 2s linear infinite kedip; /* for Safari 4.0 - 8.0 */
  animation: 1s linear infinite kedip;
}
/* for Safari 4.0 - 8.0 */
@-webkit-keyframes kedip { 
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
@keyframes kedip {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
</style>
@if ($message = session()->get('message'))    
<div class="alert alert-success" role="alert">
  {{ $message }}
</div>
@endif
<h1>
</h1>
  <section class="d-flex flex-column gap-4">
    @foreach ($product as $product)
    <div class="card mb-3 shadow" style="max-width: 840px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="{{ asset('storage/'.$product['image']) }}" class="img-fluid rounded-3" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
                @if ($product['selling_price'] != $product['original_price'] )
                <div class="d-flex">
                    <h4 class="card-title">{{ $product['name'] }}</h4>
                    <h6 class="card-title ms-auto">Rp.{{ $product['original_price'] }}</h6>
                </div>
                @else
                    <h4 class="card-title">{{ $product['name'] }}</h4>
                @endif
              <small class="card-title">{{ $product['meta_title'] }}</small>
              <h5 class="card-title mt-3">Rp.{{ $product['selling_price'] }}</h5>
              <form action="/cart/in/{{ $product['id'] }}" method="post">
                @csrf
              <div class="input-group mt-3">
                <button class="btn btn-outline-secondary descrement-btn" type="button">-</button>
                <input type="text" style="width: 40px;" class="qty_input border border-1 border-dark" name="qty">
                <button class="btn btn-outline-secondary increment-btn">+</button> 
            </div>
                <button type="submit" class="btn btn-primary mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9V5.5z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg> Add to Cart</button>
              </form>
              {{-- <p class="card-text">{{ $product['meta_description'] }}</p> --}}
            </div>
          </div>
          <div class="col-md-12">
            <p class="card-text mt-3">{{ $product['meta_description'] }}</p>
          </div>
        </div>
      </div>
    @endforeach
  </section>
<script>
    $(document).ready(function () {
      $('.increment-btn').click(function (e) { 
        e.preventDefault();
        
        var inc_value = $('.qty-input').val();
        var value =parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if (value < 10) {
          value++;
          $('.qty_input').val(value);
        } 
      });
    });
</script>
@endsection