<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Genre::create([
            'genre' => 'Horror'
        ]);

        Genre::create([
            'genre' => 'Action'
        ]);

        Genre::create([
            'genre' => 'Comedy'
        ]);

        Genre::create([
            'genre' => 'Romance'
        ]);

        Genre::create([
            'genre' => 'Fantasy'
        ]);

        Genre::create([
            'genre' => 'Thriller'
        ]);

        Genre::create([
            'genre' => 'Psycho-Thriller'
        ]);

        Genre::create([
            'genre' => 'Drama'
        ]);

       // Film::factory(5)->create();

        Film::create([
            'tittle' => 'KKN Desa Penari',
            'tahun' => '2022',
            'genre_id' => 1,
            'gambar' => '/gambar-film/kkn.jpg'
        ]);

        Film::create([
            'tittle' => 'Avengers',
            'tahun' => '2017',
            'genre_id' => 2,
            'gambar' => '/gambar-film/avenger.jpg'
        ]);


        Film::create([
            'tittle' => 'Ivana',
            'tahun' => '2022',
            'genre_id' => 1,
            'gambar' => '/gambar-film/ivanna.jpg'
        ]);

        
        Film::create([
            'tittle' => 'Ada Apa Dengan Cinta',
            'tahun' => '2002',
            'genre_id' => 4,
            'gambar' => '/gambar-film/adaapa.jpg'
        ]);

        Film::create([
            'tittle' => 'Dilan 1990',
            'tahun' => '2018',
            'genre_id' => 4,
            'gambar' => '/gambar-film/Dilan.jpg'
        ]);

        Film::create([
            'tittle' => 'My Stupid Boss',
            'tahun' => '2016',
            'genre_id' => 3,
            'gambar' => '/gambar-film/stupidboss.jpg'
        ]);
    }
}
