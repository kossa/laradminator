<?php

use App\Models\User;
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
        $factory = User::factory();
        if(!User::where('email', 'test@example.com')){
            $factory->create([
                'name'     => 'hadji kouceyla',
                'email'    => 'test@example.com',
                'role'     => 10,
            ]);
        }
        $factory->count(10)->create();
    }
}
