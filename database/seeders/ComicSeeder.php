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
        $new_comic->description = ' Il Lungo Halloween, ambientato nei primi anni di carriera del Cavaliere Oscuro, ci troveremo di fronte ad una serie di omicidi misteriosi e ad una indagine squisitamente complessa ed interessante.';
        $new_comic->title = 'Il lungo Halloween';
        $new_comic->price = 29.99;
        $new_comic->save();
    }
}
