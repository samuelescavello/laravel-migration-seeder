<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $new_train = new Train();
            $new_train->agency = $faker->company();
            $new_train->departure_station = $faker->city();
            $new_train->arrival_station = $faker->city();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->train_code = $faker->bothify('???-#####');
            $new_train->carriages = $faker->numberBetween(10, 20);
            $new_train->on_time = $faker->boolean();
            $new_train->cancelled = $faker->boolean();
            $new_train->date = $faker->date();
            $new_train->save();
        }
    }
}
