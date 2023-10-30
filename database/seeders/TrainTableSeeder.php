<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //

        for ($i = 0; $i < 20; $i++) {


            $train = new Train();
            $train->society = $faker->word();
            $train->station_departure = $faker->word();
            $train->station_arrive = $faker->word();
            $train->time_departure = $faker->time();
            $train->time_arrive = $faker->time();
            $train->code = $faker->bothify('??####');
            $train->carriages = $faker->numberBetween(1, 30);
            $train->on_time = $faker->boolean();
            $train->deleted = $faker->boolean();
            $train->department_date = $faker->date();
            //save the instructions
            $train->save();
        }
    }
}
