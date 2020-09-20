<div class="mt-8">
    <a href="{{route('movies.show', $movie['id'])}}">
        <img src="{{'https://image.tmdb.org/t/p/w500/'.$movie['poster_path']}}" alt="poster" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="{{route('movies.show', $movie['id'])}}" class="mt-2 text-lg hover:text-gray:300">
            {{$movie['title']}}
        </a>
        <div class="flex item-center text-gray-400 text-sm mt-1">
            <span>
                <svg class="fill-current text-orange-500 w-3 mt-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.94 47.94"><path d="M26.285 2.486l5.407 10.956a2.58 2.58 0 001.944 1.412l12.091 1.757c2.118.308 2.963 2.91 1.431 4.403l-8.749 8.528a2.582 2.582 0 00-.742 2.285l2.065 12.042c.362 2.109-1.852 3.717-3.746 2.722l-10.814-5.685a2.585 2.585 0 00-2.403 0l-10.814 5.685c-1.894.996-4.108-.613-3.746-2.722l2.065-12.042a2.582 2.582 0 00-.742-2.285L.783 21.014c-1.532-1.494-.687-4.096 1.431-4.403l12.091-1.757a2.58 2.58 0 001.944-1.412l5.407-10.956c.946-1.919 3.682-1.919 4.629 0z" fill="#ed8a19"/></svg>
            </span>
            <span class="ml-1">{{ $movie['vote_average'] * 10  .'%' }}</span>
            <span class="mx-2">|</span>
            <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}</span>
        </div>
        <div class="text-gray-400 text-sm">
           @foreach ($movie['genre_ids'] as $genre)
               {{$genres->get($genre)}}@if(!$loop->last),@endif
           @endforeach
        </div>
    </div>
</div>