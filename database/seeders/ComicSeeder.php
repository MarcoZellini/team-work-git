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

        $new_comic->title = $faker->realText(50);
        $new_comic->price = $faker->randomFloat(2, 0, 9999);
        $new_comic->description = $faker->realText(300);

        $new_comic->save();
    }
}
