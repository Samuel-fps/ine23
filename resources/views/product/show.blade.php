@extends('templates.master')

@section('content-center')
  <!-- SECTION: Title -->
  <div class="container-fluid">
    <div class="row d-flex justify-content-center align-items-center">
      <div class="col-4">
        <!-- LAYOUT: CENTER -->
        <div class="row p-5">
          <div class="col-12">
            <div class="card centrado">
              <img src="../{{ $product->imgUrl }}" class="card-img-top imagen-detalles" alt="Product Image">
              <div class="card-body">
                <h4 class="card-title">{{ $product->name }}</h4>
                <p>Editora: {{ $product->company->name }}</p>
                <p class="card-text">{{ $product->description }}</p>
                @if ($product->hasDiscount())
                  <p class="card-text">
                    Precio descontado: {{ "PRECIO DESCUENTO"}}€
                    <s>{{ $product->price }}€</s>
                  </p>
                @else
                  <p class="card-text">Precio: {{ $product->price }}€</p>
                @endif
                <!-- Bootstrap Button with href Route::get('/addToCart/{product}', [ProductController::class], 'addToCart')->name('cart.add'); -->
                <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      @yield('content-right') <!-- Keep the right section as it is -->
    </div>
  </div>
@endsection