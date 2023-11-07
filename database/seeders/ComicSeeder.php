<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new_comic = new Comic();
        
        $new_comic->title = 'Fairy Tail';
        $new_comic->price = 9.90;
        $new_comic->description = 'Questo fumetto è bellissimo';

        $new_comic->save();
    }
}
