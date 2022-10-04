@extends('layouts.front')
@section('content')
  <section class="d-flex flex-column gap-4">
    <div class="d-flex justify-content-between align-items-center gap-3">
      <h4 class="title-section-content">product recommendation</h4>
      <a href="#" class="btn-link">View All</a>
    </div>
    <div class="d-flex gap-4 flex-wrap">
      @foreach ($product as $item)
      <a href="/product/{{ $item['slug'] }}" class="nav-link">
       <div class="product-card">
        <img
          src="{{ asset('storage/'.$item['image']) }}"
          class="product-img"
          alt="Nike Red"
        />
        <div class="product-detail pt-3">
          <div>
            <p class="label-detail mb-1">7 Colours</p>
            <p class="title-detail">{{ $item['name'] }}</p>
          </div>
          <button
            class="btn btn-fav"
            aria-label="Button Favorite"
          >
            <svg fill="currentColor">
              <path
                d="M11.5909 6.09528L12.1213 6.6256L12.6516 6.09528C14.4453 4.30157 17.3535 4.30157 19.1472 6.0953C20.941 7.88902 20.941 10.7972 19.1473 12.591L12.2207 19.5176C12.1658 19.5725 12.0768 19.5725 12.022 19.5176L5.10555 12.6012L5.10485 12.6005L5.0953 12.591C5.09519 12.5909 5.09508 12.5907 5.09497 12.5906C3.30157 10.7969 3.30168 7.88891 5.0953 6.0953C6.88902 4.30158 9.79721 4.30157 11.5909 6.09528Z"
                stroke="currentColor"
                stroke-width="2"
              />
            </svg>
          </button>
        </div>
        <div class="product-detail pt-4">
          <div>
            @if ($item['selling_price'] != $item['original_price'] )
            <p class="label-detail mb-1">Price: <b class="text-danger text-decoration-line-through">{{ $item['original_price'] }}</b></p>
            @endif
            <p class="price-detail">{{ $item['selling_price'] }}</p>
          </div>
          <button
            class="buy-product button btn-rounded"
          >
            Buy Now
          </button>
        </div>
      </div>
    </a>
    @endforeach
    </div>
  </section>

  <section class="d-flex flex-column gap-4 mb-5">
    <h4 class="title-section-content">Category</h4>
    <div class="d-flex gap-4 flex-wrap">
      <div class="store-card">
        <img
          src="./assets/images/adidas.png"
          alt="Adidas Store"
          width="410"
          height="100"
        />
        <div class="store-logo-wrapper">
          <div class="store-logo-circle">
            <img
              src="./assets/images/adidas_logo.png"
              alt="Adidas Logo"
              class="store-logo"
            />
          </div>
        </div>
        <div class="store-name">
          <div>
            <p class="title-store">
              Product Digital
            </p>
            <p class="username-store">@adidasindonesia</p>
          </div>
          <div class="d-flex gap-3 align-items-center">
            <a href="#" class="btn-link"> Visit Store </a>
            <button
              class="button btn-follow active rounded-pill"
              onclick="handleFollow(this)"
            >
              Following
            </button>
          </div>
        </div>
        <div class="store-detail">
          <div class="section-detail">
            <h6>1.569</h6>
            <p>Total shoes</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>5.2M</h6>
            <p>Total followers</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>56</h6>
            <p>Exclusive Shoe</p>
          </div>
        </div>
      </div>
      <div class="store-card">
        <img
          src="./assets/images/puma.png"
          alt="Puma Store"
          width="410"
          height="100"
        />
        <div class="store-logo-wrapper">
          <div class="store-logo-circle">
            <img
              src="./assets/images/puma_logo.png"
              alt="Puma Logo"
              class="store-logo"
            />
          </div>
        </div>
        <div class="store-name">
          <div>
            <p class="title-store">
              Peralatan Sekolah
            </p>
            <p class="username-store">@pumaid</p>
          </div>
          <div class="d-flex gap-3 align-items-center">
            <a href="#" class="btn-link"> Visit Store </a>
            <button
              class="button btn-follow rounded-pill"
              onclick="handleFollow(this)"
            >
              +Follow
            </button>
          </div>
        </div>
        <div class="store-detail">
          <div class="section-detail">
            <h6>1.362</h6>
            <p>Total shoes</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>5.7M</h6>
            <p>Total followers</p>
          </div>
          <div class="vertical-line"></div>
          <div class="section-detail">
            <h6>76</h6>
            <p>Exclusive Shoe</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection