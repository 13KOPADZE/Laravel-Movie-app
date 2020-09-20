<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class viewMoviesTest extends TestCase
{
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            // 'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            // 'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
        ]);


        $response = $this->get(route('movies.index'));

        $response->assertSuccessful();
        $response->assertSeeText('Popular Movies');
    }

    private function fakePopularMovies()
    {
        return Http::response([
            'results' => [],
        ]);
    }
}
