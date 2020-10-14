@extends('layouts.layout')

@section('menu')
{{-- MENU --}}
<div class="sm:my-16 my-8">
    <h1 class="font-mono text-xl">Dishes</h1>
    <div class="sm:flex-no-wrap flex flex-wrap items-stretch justify-center">
        <div
            class="sm:m-1 sm:rounded-lg hover:shadow-lg sm:max-w-xs flex items-center justify-between w-full p-1 my-1 bg-white shadow-md cursor-pointer">
            <p class="hover:text-black m-4 text-gray-700">Avocado</p>
            <img src="./img/dish/advocado.jpg" alt="Advocado dish" class="object-cover w-40 h-20 rounded-lg">
        </div>
        <div
            class="sm:m-1 sm:rounded-lg hover:shadow-lg sm:max-w-xs flex items-center justify-between w-full p-1 my-1 bg-white shadow-md cursor-pointer">
            <p class="hover:text-black m-4 text-gray-700">Salad</p>
            <img src="./img/dish/salad.jpg" alt="Salad dish" class="object-cover w-40 h-20 rounded-lg">
        </div>
        <div
            class="sm:m-1 sm:rounded-lg hover:shadow-lg sm:max-w-xs flex items-center justify-between w-full p-1 my-1 bg-white shadow-md cursor-pointer">
            <p class="hover:text-black m-4 text-gray-700">Chicken</p>
            <img src="./img/dish/chicken.jpg" alt="Chicken dish" class="object-cover w-40 h-20 rounded-lg">
        </div>
    </div>
</div>

{{-- PHOTOS --}}
<div class="sm:my-16 my-8">
    <h1 class="font-mono text-xl">Restaurant</h1>
    <div class="sm:flex-no-wrap flex flex-wrap items-stretch">
        <div class="sm:mx-1 w-full my-1">
            <a href="https://unsplash.com/photos/M4E7X3z80PQ" target="_blank" class="">
                <img class="sm:rounded-lg hover:shadow-lg sm:h-40 md:h-full object-cover w-full h-24 shadow-md"
                    src="./img/restaurant/food.jpg" alt="Food on a table" title="Food on a table by Brooke Lark">
            </a>
        </div>
        <div class="sm:mx-1 w-full my-1">
            <a href="https://unsplash.com/photos/poI7DelFiVA" target="_blank" class="">
                <img class="sm:rounded-lg hover:shadow-lg sm:h-40 md:h-full object-cover w-full h-24 shadow-md"
                    src="./img/restaurant/overview.jpg" alt="A view of the restaurant"
                    title="A view of the restaurant by Jason Leung">
            </a>
        </div>
        <div class="sm:mx-1 w-full my-1">
            <a href="https://unsplash.com/photos/xBFTjrMIC0c" target="_blank" class="">
                <img class="sm:rounded-lg hover:shadow-lg sm:h-40 md:h-full object-cover w-full h-24 shadow-md"
                    src="./img/restaurant/drinks.jpg" alt="Freshly created cocktails"
                    title="Freshly created cocktails by Kobby Mendez">
            </a>
        </div>
    </div>
</div>

@endsection

{{-- //TODO show a few pictures of the restaurant (unsplash) --}}
{{-- //TODO has to show a menu, 3 meals --}}
