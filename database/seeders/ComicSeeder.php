<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $new_comic = new Comic();
        $new_comic->price = '99';
        $new_comic->title = 'batman';


        $new_comic->description = 'molto bello';


        $new_comic->save();
    }
}
