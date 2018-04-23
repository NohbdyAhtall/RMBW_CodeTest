<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Ryan McGill">

    <title>Formulator</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/normalize.css" rel="stylesheet">

  </head>

  <body>

    <header>
      
      @include ('layouts.nav')

    </header>

    <div class ="container-fluid">
      @yield('form')
      @yield('adminLink')
    </div>

    @include('layouts.footer')

  </body>
</html>
