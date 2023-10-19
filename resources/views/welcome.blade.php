<!doctype html> <!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz, since 2019, based
  on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp --> <html
  lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
  <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
  <style>
    .fakeimg {
      height: 100px;
      background: #aaa;
    }

    .imagen {
      width: 15rem;
    }

    .imagen-chica {
      width: 5rem;
    }

    h4 {
      font-size: 300%;
    }

    .verde {
      background: #89ac76;
    }

    .lightgrey {
      background: lightgrey;
    }
  </style>

  <title>My INE project</title>
</head>

<body>

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
        <div class="col-2 d-flex justify-content-center align-items-center ">
          <p>Autenticación<i class="glyphicon glyphicon-shopping-cart"></i></p>
        </div>
      </div>
    </div>

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


  <!-- LAYOUT: FOOTER -->
  <div class="jumbotron-fluid verde p-5">
    <div class="row">
      <div class="col-3">
        <strong>Acerca de</strong>
        <p>Quiénes somos</p>
        <p>trabaja con nosotros</p>
        <p>Aviso legal</p>
      </div>
      <div class="col-3">
        <strong>Navegación</strong>
        <p>Idioma / Lenguajes</p>
        <p>Mapa del sitio</p>
      </div>
      <div class="col-3">
        <strong>Ayuda</strong>
        <p>Gestionar compras</p>
        <p>Tarifas y politicas de envío</p>
        <p>Devolver o reemplazar productos</p>
        <p>Contacto para ayuda</p>
        <p>Iva spbre los bienes</p>
        <p>Métodos de pago</p>
      </div>
      <div class="col-3">
        <strong>Contacto</strong>
        <p>Atención al cliente</p>
        <p>Twitter</p>
        <p>Facebook</p>
        <p>Instagram</p>
      </div>
    </div>
  </div>

  <!-- Loading Javascripts -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin=ous">')</script>
  <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
  <script src="js/bootstrap.min.js"></script>
</body>

</html>