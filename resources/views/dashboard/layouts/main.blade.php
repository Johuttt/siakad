<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD | @yield('title')</title>

    <!-- My Icon -->
    <link rel="icon" href="{!! asset('assets/logo.png') !!}"/>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">

    <!-- Trix Editor -->
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>
  </head>
  <body>

    @include('dashboard.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard.layouts.sidebar')


    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
    </main>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script>
        feather.replace()

        function myUkt(){
            var golongan = document.getElementById("golongan").value;

            if (golongan == "BKT"){
                document.getElementById("ukt").value = 9330000;
            } else if (golongan == "UKT 1") {
                document.getElementById("ukt").value = 500000;
            } else if (golongan == "UKT 2") {
                document.getElementById("ukt").value = 1000000;
            } else if (golongan == "UKT 3") {
                document.getElementById("ukt").value = 2400000;
            } else if (golongan == "UKT 4") {
                document.getElementById("ukt").value = 5000000;
            } else if (golongan == "UKT 5") {
                document.getElementById("ukt").value = 6000000;
            } else if (golongan == "UKT 6") {
                document.getElementById("ukt").value = 6200000;
            } else if (golongan == "UKT 7") {
                document.getElementById("ukt").value = 6400000;
            } else if (golongan == "UKT 8") {
                document.getElementById("ukt").value = 6900000;
            } else {
                document.getElementById("ukt").value = 0;
            }
        }
    </script>

    <script src="/js/dashboard.js"></script>
  </body>
</html>
