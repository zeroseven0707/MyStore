@extends('layouts.front')

@section('title')
    Welcome to MyStore
@endsection

@section('content')
@include('layouts.inc.sliders')

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="owl-carousel featured-carousel owl-theme">
                <div class="item">
                    <h4>1</h4>
                </div>
                @foreach ($product as $item)
                <div class="col-md-3 my-3">
                    <div class="card">
                        <img src="{{ asset('storaage'.$item['image']) }}" alt="Product">
                        <h5>{{ $item['name'] }}</h5>
                        <small>{{ $item['small_price'] }}</small>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
@hasSection('script')
    <script>
        $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
    </script>
@endif