@extends('layouts.layout')

@section('reviews')
<form action="" method="POST" class="">
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
        <textarea required rows="2" name="message" id="message" placeholder="Add a message..."
            class="focus:outline-none focus:shadow-inner focus:border-blue-700 hover:shadow-lg w-full max-w-lg px-4 py-2 leading-tight text-gray-700 rounded-lg shadow-md appearance-none"></textarea>
    </div>

    <!-- RATING -->
    <div class="m-4">
        <label for="rating" class="sm:block hidden mb-1 font-hairline text-gray-600 cursor-pointer">Rating</label>
        <select name="rating" id="rating" class="focus:outline-none text-2xl text-center bg-gray-200 appearance-none">
            <option value="1">⭐️</option>
            <option value="2">⭐️⭐️</option>
            <option value="3">⭐️⭐️⭐️</option>
            <option value="4">⭐️⭐️⭐️⭐️</option>
            <option value="5" selected>⭐️⭐️⭐️⭐️⭐️</option>
        </select>
    </div>

    <!-- BUTTON -->
    <div class="m-4">
        <button type="submit" name="submit" value="submit"
            class="hover:bg-blue-700 hover:shadow-lg sm:w-auto bg-logo-blue w-full max-w-lg px-3 py-2 font-bold text-white rounded-full shadow-md">Submit</button>
    </div>

    <!-- POSTS -->
    @foreach ($posts as $post)
    <div class="m-4">
        <div
            class="hover:shadow-lg w-full max-w-lg px-4 py-2 mx-auto leading-tight text-gray-700 bg-white rounded-lg shadow-md appearance-none">
            <p>My name is: {{ $post->name }}</p>
            <p>My message is: {{ $post->message }}</p>
        </div>
    </div>
    @endforeach

</form>
@endsection

foreach ($posts as $post) {
echo $post->name . '<br />';
echo $post->message . '<br />';
}

{{-- // TODO Needs a form to collect reviews with: --}}
{{-- // name of the reviewer (required), --}}
{{-- // 1-5 star choice (required), --}}
{{-- // comment (optional) --}}

{{-- // Under the form, the Reviews page will show the last 10 reviews submitted --}}
