@extends('layouts.layout')

@section('reviews')
<form action="" method="POST" class="">

    <!-- RATING -->
    <div class="m-4">
        <label for="rating" class="sm:block hidden mb-1 font-hairline text-gray-600 cursor-pointer">Rating</label>
        <select name="rating" id="rating"
            class="hover:shadow-md hover:bg-white focus:outline-none p-1 text-2xl text-center bg-gray-200 rounded-full appearance-none cursor-pointer">
            <option value="1">⭐️</option>
            <option value="2">⭐️⭐️</option>
            <option value="3">⭐️⭐️⭐️</option>
            <option value="4">⭐️⭐️⭐️⭐️</option>
            <option value="5" selected>⭐️⭐️⭐️⭐️⭐️</option>
        </select>
    </div>

    <!-- NAME -->
    <div class="m-4">
        <label for="name" class="sm:block hidden mb-1 font-hairline text-gray-600 cursor-pointer">Name</label>
        <input required type="text" name="name" id="name" placeholder="Add your name..."
            class="focus:outline-none focus:shadow-inner focus:border-blue-700 hover:shadow-lg w-full max-w-lg px-4 py-2 leading-tight text-gray-700 rounded-lg shadow-md appearance-none">
    </div>

    <!-- MESSAGE -->
    <div class="m-4">
        <label for="message" class="sm:block hidden mb-1 font-hairline text-gray-600 cursor-pointer">Message
            (optional)</label>
        <textarea rows="2" name="message" id="message" placeholder="Add a message..."
            class="focus:outline-none focus:shadow-inner focus:border-blue-700 hover:shadow-lg w-full max-w-lg px-4 py-2 leading-tight text-gray-700 rounded-lg shadow-md appearance-none"></textarea>
    </div>

    <!-- BUTTON -->
    <div class="m-4">
        <button type="submit" name="submit" value="submit" title="Submit your message!"
            class="hover:bg-blue-700 hover:shadow-lg sm:w-auto bg-logo-blue w-full max-w-lg px-3 py-2 font-bold text-white rounded-full shadow-md">Submit</button>
    </div>
</form>

<!-- POSTS -->
@foreach ($posts as $post)
<div class="relative max-w-lg px-8 py-4 mx-auto my-4 text-black bg-white rounded-lg shadow-md">
    {{-- EDIT/DELETE --}}
    <form method="POST">
        <button
            class="hover:bg-green-700 hover:border-gray-400 hover:text-white hover:font-bold absolute top-0 left-0 px-1 -mt-1 -ml-1 text-base font-semibold text-red-400 bg-white border border-white rounded-full"
            value="{{ $post->id }}" name="edit" title="Edit this entry">✏️</button>
        <button
            class="hover:bg-red-700 hover:border-gray-400 hover:text-white hover:font-bold absolute top-0 right-0 px-1 -mt-1 -mr-1 text-base font-semibold text-red-400 bg-white border border-white rounded-full"
            value="{{ $post->id }}" name="delete" title="Delete this entry">ⓧ</button>
    </form>
    {{-- RATING --}}
    <p class="mb-2 font-mono text-xl font-bold"
        title="{{ $post->name }} has given our food a rating of {{ $post->rating }} stars">
        @for ($i = 0; $i < $post->rating; $i++)
            ⭐️
            @endfor
    </p>
    {{-- MESSAGE --}}
    <p class="text-justify text-gray-400">{{ $post->message }}</p>
    {{-- NAME&DATE --}}
    <div class="flex justify-between mt-3">
        <p class="font-mono italic text-green-300" title="Author">{{ $post->name }}</p>
        <p class="font-mono italic text-blue-300" title="Posting Date">{{ $post->created_at }}</p>
    </div>
</div>
{{-- <div class="m-4">
        <div
            class="hover:shadow-lg w-full max-w-lg px-4 py-2 mx-auto leading-tight text-gray-700 bg-white rounded-lg shadow-md appearance-none">
            <p>{{ $post->name }}</p>
<p>{{ $post->message }}</p>
</div>
</div> --}}
@endforeach

@endsection

{{-- // Under the form, the Reviews page will show the last 10 reviews submitted --}}
