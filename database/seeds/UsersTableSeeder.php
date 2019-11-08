<?php

use App\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'gautammerina3@gmail.com')->first();

        if(!$user)
        {
            User::create([
                'name' => 'Merina Gautam',
                'email' => 'gautammerina3@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('password')
            ]);
        }
    }
}
