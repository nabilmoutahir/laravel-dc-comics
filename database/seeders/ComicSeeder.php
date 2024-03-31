<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// IMPORT APP MODEL
use App\Models\comic;

// IMPORT FAKER
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $newComic = new Comic;

            // ADD PARAMETERS
            $newComic->title = $faker->text(50);
            $newComic->description = $faker->paragraphs(3, true);
            $newComic->thumb = $faker->imageUrl(640, 480, 'comic', true);
            $newComic->price = $faker->text(10);
            $newComic->series = $faker->sentence();
            $newComic->sale_date = $faker->date();
            $newComic->type = $faker->text(30);

            // SAVE
            $newComic->save();
        }
    }
}
