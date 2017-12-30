<?php

use App\User;
use Illuminate\Database\Seeder;

class users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        
        User::truncate();
        
        $data = [];
        
        for($i = 1; $i <= 1 ; $i++) {
            array_push($data, [
                'name' => 'hadji kouceyla',
                'email' => 'test@example.com',
                'password' => bcrypt('123456'),
                'avatar'   => 'user2-160x160.jpg',
                'role'     => 10,
                'bio'      => $faker->realText(),
            ]);
        }
        
        User::insert($data);
    }
}
