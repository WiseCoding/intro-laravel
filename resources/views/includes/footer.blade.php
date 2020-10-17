{{-- <footer class="w-full">
    <div
        class="sm:justify-around bg-logo-blue md:text-base flex flex-wrap justify-center p-2 py-6 text-sm text-center text-gray-400 shadow-lg">
        <div class="sm:justify-center flex flex-wrap justify-center mx-2">
            <p class=" mx-1 font-sans" title="We are open from 9 in the morning until 8 in the evening, 6days a week!">
                Open from <b>09</b>:00
                till
                <b>20</b>:00.</p>
            <p class=" mx-1 font-sans" title="We are taking a break on Monday, zZzZz...">Closed on
                <b>Monday</b>.
            </p>
        </div>
        <a href="https://duckduckgo.com/?t=ffab&q=Laravoire&atb=v228-1&ia=maps&iaxm=maps&strict_bbox=0&bbox=52.1220735233903%2C2.5105282845454724%2C48.94724826641982%2C6.372794984545493&iai=1265404698002222506"
            target="_blank" title="Navigate to Lara... something!" class=" hover:text-white mx-2 font-sans">Bakerstreet
            230, 8950 Framework, Laravel 🏴‍☠️</a>
    </div>
</footer> --}}


<footer class=" flex-shrink-0 w-full bg-white">
    <div class="sm:px-6 lg:px-8 max-w-screen-xl px-4 py-4 mx-auto space-y-8 overflow-hidden">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="./"
                    class="hover:text-gray-800 text-base leading-6 text-gray-500 {{ Request::path() === '/' ? 'text-gray-600 underline' : 'text-gray-500' }}">
                    Menu
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="https://github.com/WiseCoding/intro-laravel" class="hover:text-gray-500 text-gray-400">
                    <span class="sr-only">GitHub</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd" />
                    </svg>
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="./reviews"
                    class="hover:text-gray-800 text-base leading-6 text-gray-500 {{ Request::path() === 'reviews' ? 'text-gray-600 underline' : 'text-gray-500' }}">
                    Reviews
                </a>
            </div>
        </nav>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            &copy; 2020 <a href="https://github.com/WiseCoding/" class="hover:text-gray-600">Mattias Bonte</a>. All
            rights
            reserved.
        </p>
    </div>
</footer>
