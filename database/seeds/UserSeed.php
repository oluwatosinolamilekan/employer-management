<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'lekan',
            'email' => 'oluwatosinolamilekan@gmail.com',
            'password' => 'password',
            'password' => 'password',
        ]);
    }
}
