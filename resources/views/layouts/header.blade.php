<!-- LAYOUT: HEADER -->
<div class="jumbotron-fluid verde">
    <div class="row">
        <div class="col-2 d-flex justify-content-center align-items-center">
            <h1>My INE eShop</h1>
        </div>
        <div class="col-2 d-flex align-items-center">
            <div class="d-flex form-inline">
                <input type="search" id="form1" class="form-control" placeholder="Buscar" />
                <i class="glyphicon glyphicon-search"></i>
            </div>
        </div>
        <div class="col-6"></div>
        <div class="col-2 d-flex justify-content-center align-items-center">
            <a href="{{ route('cart.show') }}" class="d-flex align-items-center text-decoration-none">
                <p class="mb-0"><i class="glyphicon glyphicon-shopping-cart"></i></p>
                @php
                    // Obtén la instancia del carrito desde la sesión
                    $carro = new \App\Models\Cart(session('cart'));
                    $carroCantidad = $carro->iTotalItems;
                @endphp
                @if($carroCantidad > 0)
                    <span class="badge badge-pill badge-danger">{{ $carroCantidad }}</span>
                @endif
            </a>
        </div>
    </div>
</div>

