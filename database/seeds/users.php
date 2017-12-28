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
                'email' => 'hadjikouceyla@gmail.com',
                'password' => bcrypt('123456'),
            ]);
        }
        
        User::insert($data);
    }
}
