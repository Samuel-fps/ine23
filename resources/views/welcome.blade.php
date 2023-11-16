@extends('templates.master')

@section('content-center')
  <!-- SECTION: Title -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-9">
        <!-- LAYOUT: CENTER -->
        <div class="row p-5">
          <h2>OFERTAS DEL DÍA</h2>
          <div class="col-12">
            <div class="row">
              @foreach($aProduct_offering as $product)
                <div class="col-3">
                  <div class="card centrado">
                    <img src="{{ $product->imgUrl }}" class="card-img-top imagen" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $product->name }}</h5>
                      <p class="card-text"> <strong>{{ $product->price - ($product->price * $product->discountPercent / 100)  }}€</strong> <s>{{ $product->price }}€</s></p>
                      <a class="btn btn-primary" href="{{route('product.show', $product)}}">Ver más</a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>

          <div class="mt-4">
            <h2>NUEVOS PRODUCTOS</h2>
          </div>
          <div class="row">
            @foreach($aProduct_new as $product)
              <div class="col-3">
                <div class="card centrado">
                  <img src="{{ $product->imgUrl }}" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    @if ($product->hasDiscount())
                        <p class="card-text"> <strong>{{ $product->price - ($product->price * $product->discountPercent / 100)  }}€</strong> <s>{{ $product->price }}€</s></p>
                    @else
                        <p class="card-text"> <strong>{{ $product->price }}€</strong></p>
                    @endif
                  </p>
                  <a class="btn btn-primary" href="{{route('product.show', $product)}}">Ver más</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-3">
        <!-- LAYOUT: RIGHT -->
        <div class="lightgrey pt-1 pb-1">
          <div class="row p-4 d-flex justify-content-center">
            <h2><strong>Bestsellers</strong></h2>
          </div>
          <div class="row p-4 d-flex justify-content-center">
            <h4>1</h4> <img class="imagen-chica ml-4" src="img\badaq.jpg" alt="">
          </div>
          <div class="row p-4 d-flex justify-content-center">
            <h4>2</h4> <img class="imagen-chica ml-4" src="img\elSecretodelaCatedral.jpeg"  alt="">
          </div>
          <div class="row p-4 d-flex justify-content-center">
            <h4>3</h4> <img class="imagen-chica ml-4" src="img\laArmaduraDeLaLuz.jpeg"  alt="">
          </div>
          <div class="row p-4 d-flex justify-content-center">
            <h4>4</h4> <img class="imagen-chica ml-4" src="img\malditaRoma.jpeg"  alt="">
          </div>
          <div class="row p-4 d-flex justify-content-center">
            <h4>5</h4> <img class="imagen-chica ml-4" src="img\losPilaresDeLaTierra.jpg" alt="">
          </div>
          <div class="row p-4 d-flex justify-content-center">
            <button class="btn btn-primary">Ver más</button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection