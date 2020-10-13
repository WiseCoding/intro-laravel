<!doctype html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Lara Eat</title>

  <link rel="stylesheet" type="text/css" href="./css/index.css" />


  <!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Lara Eats') }}</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ mix('css/app.css') }}" rel="stylesheet"> -->
</head>


<body class="box-border bg-orange-400">

  <div class="container relative mx-auto text-center text-black">
    <!-- HEADER -->
    @include('header')

    <!-- MAIN -->

    <!-- //TODO show a few pictures of the restaurant (unsplash) -->
    <!-- //TODO has to show a menu, 3 meals -->

    <!-- FOOTER -->
    @include('footer')
  </div>

</body>

</html>