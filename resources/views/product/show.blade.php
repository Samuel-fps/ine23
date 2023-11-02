@extends('templates.master')

@section('content-center')
  <!-- SECTION: Title -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-9">
        <!-- LAYOUT: CENTER -->
        <div class="row p-5">
          <div class="col-4">
            <div class="card d-flex justify-content-center align-items-center">
              <img src="/{{ $product->imgUrl }}" class="card-img-top imagen" alt="Product Image">
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">Price: {{ $product->price }}€</p>
                <!-- <p>{//{ $product->company->name }}</p> -->
                @if ($product->hasDiscount())
                    <p class="card-text"> <strong>{{ $product->price - ($product->price * $product->discountPercent / 100)  }}€</strong> <s>{{ $product->price }}€</s></p>
                    
                @endif
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('content-right') <!-- Keep the right section as it is -->
    </div>
  </div>
@endsection