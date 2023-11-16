@extends('templates.master')

@section('content-center')
<!-- SECTION: Title -->
<div class="container-fluid">
  <div class="row">
    <div class="col-9">
      <!-- LAYOUT: CENTER -->
      <div class="row p-5">
        <h2>DETALLE DEL CARRITO</h2>
        <div class="col-12">
          <div class="row">
            @foreach($cart->htItem as $productId => $product)
            <div class="col-3">
              <div class="card d-flex justify-content-center align-items-center">
                <img src="{{ $product['imgUrl'] }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                  <h5 class="card-title">{{ $product['name'] }}</h5>

                  <p class="card-text">Price: {{ $product['price'] }}€</p>


                  <!-- Botones [+] y [-], cantidad, y botón de eliminar -->
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group" role="group">
                      <a href="{{ route('cart.operate', ['operation' => 'add', 'product' => $productId]) }}"
                        class="btn btn-secondary">+</a>
                      <span class="btn btn-light">{{ $product['quantity'] }}</span>
                      <a href="{{ route('cart.operate', ['operation' => 'remove', 'product' => $productId]) }}"
                        class="btn btn-secondary">-</a>
                    </div>
                    <a href="{{ route('cart.operate', ['operation' => 'removeAll', 'product' => $productId]) }}"
                      class="btn btn-danger">Eliminar</a>
                  </div>

                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <!-- LAYOUT: RIGHT -->
      <!-- Aquí puedes agregar el total de productos y el precio total -->
      <div class="mt-4 card centrado">
        <h4>Total de Productos: {{ $cart->iTotalItems }}</h4>
        <h4>Precio Total: {{ $cart->dTotalPrice }}€</h4>
      </div>
    </div>
  </div>
</div>
@endsection