<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">  <style>
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
@include ('layouts.header')
<body>
    @yield ('content-center')
    @yield ('content-right')
    @include ('layouts.footer')
    <!-- Loading Javascripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin=ous">')</script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
