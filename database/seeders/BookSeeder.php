<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'publisher_id' => 1,
            'image' => '/img/bookcover.png',
            'synopsis' => 'INI SINOPSIS',
            'year' => 2021
        ]);

        DB::table('books')->insert([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'publisher_id' => 1,
            'image' => '/img/bookcover.png',
            'synopsis' => 'INI SINOPSIS',
            'year' => 2021
        ]);
        DB::table('books')->insert([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'publisher_id' => 1,
            'image' => '/img/bookcover.png',
            'synopsis' => 'INI SINOPSIS',
            'year' => 2021
        ]);
        DB::table('books')->insert([
            'title' => 'Book 1',
            'author' => 'Author 1',
            'publisher_id' => 1,
            'image' => '/img/bookcover.png',
            'synopsis' => 'INI SINOPSIS',
            'year' => 2021
        ]);
    }
}
