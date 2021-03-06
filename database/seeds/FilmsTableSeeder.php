<?php

use Illuminate\Database\Seeder;
use App\Film;
use Faker\Generator as Faker;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $new_film = new Film();
            $new_film->title = $faker->word('');
            $new_film->genre = $faker->word('');
            $new_film->year = $faker->year('');
            $new_film->description = $faker->paragraph('');
            $new_film->save();
        }
    }
}
