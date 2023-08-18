<?php

namespace Database\Seeders;

use App\Models\Channel;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Channel::create([
                'ChannelName' => $faker->name(),
                'Description' => $faker->sentence(3, true),
                'SubscribersCount' => $faker->numberBetween(1, 10),
                'URL' => $faker->url(),
            ]);
        }
    }
}
