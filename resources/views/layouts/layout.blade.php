<!doctype html>
<html lang="en" class="relative h-full p-0 m-0">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LaravEat</title>
    <link rel="stylesheet" type="text/css" href="./css/app.css" />
</head>


<body class="box-border relative flex flex-col h-full p-0 m-0 bg-gray-200">
    <!-- HEADER -->
    @include('includes.header')

    <!-- MAIN -->
    <div class="container relative flex-grow row-span-4 row-start-2 mx-auto text-center">
        @yield('menu')
        @yield('reviews')
    </div>

    <!-- FOOTER -->
    @include('includes.footer')

</body>

</html>
