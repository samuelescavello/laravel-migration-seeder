<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                "agency" => "trenitalia",
                "departure_station" => "milano",
                "arrival_station" => "roma",
                "departure_time" => "10:30",
                "arrival_time" => "12:30",
                "train_code" => "005966",
                "carriages" => 20,
                "on_time" => "in orario",
                "cancelled" => "no",
                "date" => "2024-05-22"
            ],
            [
                "agency" => "trenitalia",
                "departure_station" => "firenze",
                "arrival_station" => "cosenza",
                "departure_time" => "10:30",
                "arrival_time" => "19:30",
                "train_code" => "005066",
                "carriages" => 13,
                "on_time" => "in orario",
                "cancelled" => "no",
                "date" => "2024-05-22"
            ],
            [
                "agency" => "trenitalia",
                "departure_station" => "foggia",
                "arrival_station" => "roma",
                "departure_time" => "10:00",
                "arrival_time" => "18:30",
                "train_code" => "994621",
                "carriages" => 10,
                "on_time" => "in orario",
                "cancelled" => "no",
                "date" => "2024-05-22"
            ],
            [
                "agency" => "trenitalia",
                "departure_station" => "genova",
                "arrival_station" => "pescara",
                "departure_time" => "15:00",
                "arrival_time" => "17:30",
                "train_code" => "994377",
                "carriages" => 20,
                "on_time" => "in orario",
                "cancelled" => "cancellato",
                "date" => "2024-05-22"
            ]


        ];

        foreach ($trains as $train) {
            $new_train = new Train();
            $new_train->agency = $train['agency'];
            $new_train->departure_station = $train['departure_station'];
            $new_train->arrival_station = $train['arrival_station'];
            $new_train->departure_time = $train['departure_time'];
            $new_train->arrival_time = $train['arrival_time'];
            $new_train->train_code = $train['train_code'];
            $new_train->carriages = $train['carriages'];
            $new_train->on_time = $train['on_time'];
            $new_train->cancelled = $train['cancelled'];
            $new_train->date = $train['date'];
            $new_train->save();
        }
    }
}
