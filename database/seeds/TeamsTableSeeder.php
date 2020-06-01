<?php

use App\Team;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        //Team::truncate();

        $faker = Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 3; $i++) {
            Team::create([
                'team_name' => $faker->jobTitle,
                'team_logo' => $faker->imageUrl(),
                'club_state' => $faker->sentence,
            ]);
        }
    }
}
