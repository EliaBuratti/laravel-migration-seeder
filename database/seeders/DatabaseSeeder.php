<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            TrainTableSeeder::class
        ]);
    }
}

/*     public function run(Faker $faker): void
    {
        //
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

        //save the instructions
        $train->save();
    } */
