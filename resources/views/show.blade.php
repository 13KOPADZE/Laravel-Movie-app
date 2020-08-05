@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-gray-800 ">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="/img/parasite.jpg" alt="parasite" class="w-64 md:w-96" style="width: 24rem">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">
                    Parasite 2019
                </h2>
                <div class="flex flex-wrap item-center text-gray-400 text-sm mt-1">
                    <span>
                        <svg class="fill-current text-orange-500 w-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94"><path d="M26.285 2.486l5.407 10.956a2.58 2.58 0 001.944 1.412l12.091 1.757c2.118.308 2.963 2.91 1.431 4.403l-8.749 8.528a2.582 2.582 0 00-.742 2.285l2.065 12.042c.362 2.109-1.852 3.717-3.746 2.722l-10.814-5.685a2.585 2.585 0 00-2.403 0l-10.814 5.685c-1.894.996-4.108-.613-3.746-2.722l2.065-12.042a2.582 2.582 0 00-.742-2.285L.783 21.014c-1.532-1.494-.687-4.096 1.431-4.403l12.091-1.757a2.58 2.58 0 001.944-1.412l5.407-10.956c.946-1.919 3.682-1.919 4.629 0z" fill="#ed8a19"/></svg>
                    </span>
                    <span class="ml-1">85%</span>
                    <span class="mx-2">|</span>
                    <span>February 2020</span>
                    <span class="mx-2">|</span>
                    <span>Action, thriller, Drama</span>
                </div>
                <p class="text-gray-300 mt-8">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sunt dolorem ducimus quasi, similique corrupti accusamus nostrum dicta optio, repellat doloribus quis laborum blanditiis, necessitatibus praesentium voluptatum dolor eaque enim. Pariatur!
                </p>
                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bong asdas</div>
                            <div class="text-sm text-gray-400">Screenplay, something, blabla</div>
                        </div>
                        <div class="ml-8">
                            <div>Bong asdas</div>
                            <div class="text-sm text-gray-400">Screenplay, something, blabla</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex items-center focus:outline-none bg-orange-500 text-gray-900  rounded  font-semibold px-5 py-4 hover:bg-orange-600 transion ease-in-out duration-150">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 fill-current" viewBox="0 0 336 336"><path d="M286.8 49.2C256.4 18.8 214.4 0 168 0 121.6 0 79.6 18.8 49.2 49.2 18.8 79.6 0 121.6 0 168c0 46.4 18.8 88.4 49.2 118.8C79.6 317.2 121.6 336 168 336c46.4 0 88.4-18.8 118.8-49.2C317.2 256.4 336 214.4 336 168c0-46.4-18.8-88.4-49.2-118.8zm-14.4 223.2c-26.8 26.8-63.6 43.2-104.4 43.2s-77.6-16.4-104.4-43.2C37.2 245.6 20.4 208.8 20.4 168S36.8 90.4 63.6 63.6C90.4 36.8 127.2 20.4 168 20.4s77.6 16.4 104.4 43.2c26.8 26.8 43.2 63.6 43.2 104.4s-16.8 77.6-43.2 104.4z"/><path d="M261.2 156c-.8-.8-2-2.4-3.2-4l-.8-.8c-1.2-1.2-2.4-2-4-2.8l-59.2-34s-.4 0-.4-.4L134 79.6c-5.2-3.2-11.2-3.6-16.8-2.4-5.6 1.6-10.4 5.2-13.6 10.4-1.2 1.6-1.6 3.6-2.4 5.2-.4 1.2-.4 2.8-.8 4.4v139.6c0 6 2.4 11.6 6.4 15.6s9.6 6.4 15.6 6.4c2 0 4.4-.4 6.4-1.2s4-1.6 5.6-2.8l58.8-34 .8-.4 59.2-34c.4 0 .4-.4.8-.4 4.8-3.2 8.4-8 9.6-13.2 1.6-5.6.8-11.6-2.4-16.8zM244 168.4c0 .4-.4.8-.8.8h-.4L184 203.6l-.4.4-58.8 34c-.4 0-.4.4-.8.4 0 0-.4 0-.4.4h-.4c-.4 0-.8-.4-1.2-.4-.4-.4-.4-.8-.4-1.2V98.4c.4-.4.8-.8 1.2-.8h1.2l59.2 34 .4.4 59.6 34.4.4.4.4.4v1.2z"/></svg>
                        <span class="ml-2">Play Trailer</span>
                    </button>
                </div>
            </div>
        </div>
    </div> {{-- Movie info  --}}
    
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  lg:grid-cols-5 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="mt-2 text-lg hover:text-gray:300">
                            Parasite
                        </a>
                        <div class="text-gray-400 text-sm">
                            Action, Comedy, Thriller
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="movie-images border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>

                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
                <div class="mt-8">
                    <a href="">
                        <img src="img/parasite.jpg" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection