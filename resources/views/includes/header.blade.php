<header class="top-0 w-full">
    <div
        class="sm:justify-around bg-logo-blue flex flex-wrap items-center justify-center text-center text-gray-400 shadow-lg">
        <img class="md:inline hidden h-48" src="./img/logo_banner.png" alt="Restaurant logo" title="Restaurant logo" />
        <div>
            <h1 class="color md:text-4xl lg:text-5xl md:my-0 my-4 text-3xl font-thin"
                title="Or with your mouth, the choice is yours!">Food for thought 🧠</h1>
            <ul class="md:mt-8 flex flex-wrap justify-center m-2">
                <a href="./" title="Order some food"
                    class="px-3 hover:text-white py-1 mx-2 font-bold cursor-pointer {{ Request::path() === '/' ? 'text-white underline' : 'text-gray-300' }}">Menu</a>
                <a href="./reviews" title="Check out our reviews"
                    class="hover:text-white px-3 py-1 mx-2 font-bold cursor-pointer {{ Request::path() === 'reviews' ? 'text-white underline' : 'text-gray-300' }}">Reviews</a>
            </ul>
        </div>
    </div>
</header>
