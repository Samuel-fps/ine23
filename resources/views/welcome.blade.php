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
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src="img/harryPotter.jpg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Harry Potter</h5>
                    <p class="card-text"> <strong>18€</strong> <s>25€</s></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src="img\elQuijote.jpg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">El Quijote</h5>
                    <p class="card-text"> <strong>18€</strong> <s>25€</s></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src="img\laBiblia.jpg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">La Biblia</h5>
                    <p class="card-text"> <strong>12€</strong> <s>15€</s></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src="img\elSennorDeLosAnillos.jpg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">El señor de los Anillos</h5>
                    <p class="card-text"> <strong>17€</strong> <s>28€</s></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="mt-4"><h2>NUEVOS PRODUCTOS</h2></div>
            <div class="row">
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src="img\laGuerraDeLaAmapola.jpg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">La Guerra de la Amapola</h5>
                    <p class="card-text"> <strong>18€</strong></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src=" img\tuLoHarias.jpeg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">¿Tu lo Harías?</h5>
                    <p class="card-text"> <strong>18€</strong></p>
                  </div>
                </div>
              </div>
              <div class="col-3">
                <div class="card d-flex justify-content-center align-items-center">
                  <img src=" img\yoRobot.jpeg" class="card-img-top imagen" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Yo Robot</h5>
                    <p class="card-text"> <strong>12€</strong></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('content-right')
      <!-- LAYOUT: RIGHT -->
      <div class="col-3  lightgrey pt-1 pb-1">
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
        <button class="btn btn-primary">Ver más</button>
      </div>
    </div>
  </div>
@endsection