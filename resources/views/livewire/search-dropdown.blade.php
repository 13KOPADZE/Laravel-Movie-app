<div class="relative mt-3 md:mt-0">
    <input wire:model.debounce.100ms="search"  type="text" class="bg-gray-800 rounded-full w-64 pl-8 px-4 py-1 focus:outline-none focus:shadow-outline" placeholder="Search">
    <div class="absolute top-0">
        <svg
            class="fill-current text-gray-500 w-4 mt-2 ml-2"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 512 512"
            >
            <path
                fill="#fff"
                d="M495 466.2L377.2 348.4c29.2-35.6 46.8-81.2 46.8-130.9C424 103.5 331.5 11 217.5 11 103.4 11 11 103.5 11 217.5S103.4 424 217.5 424c49.7 0 95.2-17.5 130.8-46.7L466.1 495c8 8 20.9 8 28.9 0 8-7.9 8-20.9 0-28.8zm-277.5-83.3C126.2 382.9 52 308.7 52 217.5S126.2 52 217.5 52C308.7 52 383 126.3 383 217.5s-74.3 165.4-165.5 165.4z"
            />
        </svg>
    </div>
    <div wire:loading class="spinner top-0 right-0 mr-4 mt-4"></div>
    @if (strlen($search) >= 2)
        <div class="absolute bg-gray-800 rounded text-sm w-64 mt-4">
            <ul>
                @forelse ($searchResults as $results)
                    <li class="border-b border-gray-700">
                        <a href="{{ route('movies.show', $results['id']) }}" class="block hover:bg-gray-700 px-3 py-3 flex items-center">
                            @if ($results['poster_path'])
                                <img src="{{'https://image.tmdb.org/t/p/w92/'.$results['poster_path']}}" class="mr-4 w-8" alt="search poster">
                            @else
                                <img src="https://via.placeholder.com/50x75" alt="poster" class="w-8 mr-4">
                            @endif
                            <span >{{ $results['title'] }}</span>
                        </a>
                    </li>
                @empty
                    <div class="px-3 py-3">
                        No results for "{{ $search }}"
                    </div>
                @endforelse
            </ul>
        </div>
    @endif
</div>
