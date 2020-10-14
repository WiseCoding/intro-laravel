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

    <!-- BUTTON -->
    <div class="m-4">
        <button type="submit" name="submit" value="submit"
            class="hover:bg-blue-700 hover:shadow-lg sm:w-auto bg-logo-blue w-full max-w-lg px-3 py-2 font-bold text-white rounded-full shadow-md">Submit</button>
    </div>

    <!-- POSTS -->
    <div class="m-4">
        <div
            class="hover:shadow-lg w-full max-w-lg px-4 py-2 mx-auto leading-tight text-gray-700 bg-white rounded-lg shadow-md appearance-none">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus earum, nemo enim veniam aut aliquam error
            similique, doloribus necessitatibus cupiditate tempora amet perspiciatis? Ipsa, minima! Molestiae aliquam
            repudiandae illum atque.
        </div>
    </div>
    <div class="m-4">
        <div
            class="hover:shadow-lg w-full max-w-lg px-4 py-2 mx-auto leading-tight text-gray-700 bg-white rounded-lg shadow-md appearance-none">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus earum, nemo enim veniam aut aliquam error
            similique, doloribus necessitatibus cupiditate tempora amet perspiciatis? Ipsa, minima! Molestiae aliquam
            repudiandae illum atque.
        </div>
    </div>
    <div class="m-4">
        <div
            class="hover:shadow-md w-full max-w-lg px-4 py-2 mx-auto leading-tight text-gray-700 bg-white rounded-lg shadow-md appearance-none">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus earum, nemo enim veniam aut aliquam error
            similique, doloribus necessitatibus cupiditate tempora amet perspiciatis? Ipsa, minima! Molestiae aliquam
            repudiandae illum atque.
        </div>
    </div>
</form>
@endsection

{{-- // TODO Needs a form to collect reviews with: --}}
{{-- // name of the reviewer (required), --}}
{{-- // 1-5 star choice (required), --}}
{{-- // comment (optional) --}}

{{-- // Under the form, the Reviews page will show the last 10 reviews submitted --}}
