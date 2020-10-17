@extends('layouts.layout')

@section('reviews')

<div class="sm:my-16 pb-6 my-8">
    <h1 class="font-mono text-xl">Rate us 🥗</h1>
    <form action="/reviews" method="POST" class="">
        @csrf

        <!-- RATING -->
        <div class="my-2">
            <select name="rating" id="rating"
                class="hover:shadow-md hover:scale-125 hover:bg-white focus:outline-none p-1 text-2xl text-center duration-500 ease-in-out transform bg-gray-200 rounded-full appearance-none cursor-pointer">
                <option value="1" title="Horrible 🤮! My bathwater has more nutrients than this food...🛁">⭐️</option>
                <option value="2" title="I had to binge a pack of menthos to get rid of the taste.🦴">⭐️⭐️</option>
                <option value="3" title="Average opinion, just like my life. Average is life? ☯️">⭐️⭐️⭐️</option>
                <option value="4" title="I really enjoyed the food and the surroundings were also very pleasing! 😃">
                    ⭐️⭐️⭐️⭐️</option>
                <option value="5" title="This was the best day of my life 😍. I'll be back, and bring all my friends!"
                    selected>⭐️⭐️⭐️⭐️⭐️</option>
            </select>
        </div>

        <!-- NAME -->
        <div class="mx-4 my-2">
            <label for="name" class="sm:block hidden mb-1 font-thin text-gray-600 cursor-pointer">Name</label>
            <input required type="text" name="name" id="name" placeholder="Add your name..."
                class="focus:outline-none focus:shadow-inner focus:border-blue-700 hover:shadow-lg w-full max-w-lg px-4 py-2 leading-tight text-gray-700 rounded-lg shadow-md appearance-none">
        </div>

        <!-- MESSAGE -->
        <div class="mx-4 my-2">
            <label for="message" class="sm:block hidden mb-1 font-thin text-gray-600 cursor-pointer">Message
                (optional)</label>
            <textarea rows="2" type="message" name="message" id="message" placeholder="Add a message..."
                class="focus:outline-none focus:shadow-inner focus:border-blue-700 hover:shadow-lg w-full max-w-lg px-4 py-2 leading-tight text-gray-700 rounded-lg shadow-md appearance-none"></textarea>
        </div>

        <!-- BUTTON -->
        <div class="mx-4 my-2">
            <button type="submit" name="submit" value="submit" title="Submit your message!"
                class="hover:bg-blue-700 hover:shadow-lg sm:w-auto bg-logo-blue w-full max-w-lg px-3 py-2 font-bold text-white rounded-md shadow-md">Submit</button>
        </div>
    </form>
</div>



<!-- POSTS -->
<div class="sm:my-16 w-full my-8">
    <h1 class="font-mono text-xl">Reviews</h1>
    @foreach ($posts as $post)
    <div class="m-4">
        <div class="relative max-w-lg px-8 py-4 mx-auto text-black bg-white rounded-lg shadow-md">
            {{-- EDIT/DELETE --}}
            <form method="POST">
                @csrf
                <button
                    class="hover:bg-green-700 hover:border-gray-400 hover:text-white hover:font-bold absolute top-0 left-0 px-1 -mt-1 -ml-1 text-base font-semibold text-red-400 bg-white border border-white rounded-full"
                    value="{{ $post->id }}" name="edit" title="Edit this entry">✏️</button>
                <button
                    class="hover:bg-red-700 hover:border-gray-400 hover:text-white hover:font-bold absolute top-0 right-0 px-1 -mt-1 -mr-1 text-base font-semibold text-red-400 bg-white border border-white rounded-full"
                    value="{{ $post->id }}" name="delete" title="Delete this entry">ⓧ</button>
            </form>
            {{-- RATING --}}
            <p class="hover:scale-110 mb-2 font-mono text-xl font-bold duration-300 ease-in-out transform"
                title="{{ $post->name }} has given our food a rating of {{ $post->rating }} stars">
                @for ($i = 0; $i < $post->rating; $i++)
                    ⭐️
                    @endfor
            </p>
            {{-- MESSAGE --}}
            <p class="text-justify text-gray-700">{{ $post->message }}</p>
            {{-- NAME&DATE --}}
            <div class="flex justify-between mt-3">
                <p class="font-mono italic text-green-500" title="Author">{{ $post->name }}</p>
                <p class="font-mono italic text-blue-500" title="Posted at {{ $post->created_at }}">
                    {{ substr($post->created_at, 0, 10) }}
                </p>
            </div>
        </div>
    </div>

    @endforeach
</div>



@endsection
