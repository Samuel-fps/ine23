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
        <div class="col-2 d-flex justify-content-end align-items-center">
            @auth
                {{-- Usuario autenticado --}}
                <div class="d-flex align-items-center">
                    <a href="{{ route('dashboard') }}" class="text-decoration-none">
                        <p class="mb-0">{{ Auth::user()->name }}</p>
                    </a>
                    
                    {{-- Botón de desconexión --}}
                    <form method="POST" action="{{ route('user.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-link text-danger">X</button>
                    </form>
                </div>
            @else
                {{-- Usuario no autenticado --}}
                <a href="{{ route('login') }}" class="text-decoration-none">
                    <p class="mb-0">Autenticación</p>
                </a>
            @endauth

            <a href="{{ route('cart.show') }}" class="d-flex align-items-center text-decoration-none ml-3">
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
