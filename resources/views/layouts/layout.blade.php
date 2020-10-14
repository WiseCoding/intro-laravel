<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LaravEat</title>
  <link rel="stylesheet" type="text/css" href="./css/index.css" />

</head>


<body class="bg-logo-blue box-border">

    <!-- HEADER -->
    @include('includes.header')

  <div class="container relative mx-auto text-center">
    <!-- MAIN -->
    @yield('form')

  </div>

  <!-- FOOTER -->
  @include('includes.footer')

</body>

</html>
