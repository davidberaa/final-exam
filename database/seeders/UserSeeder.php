<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=[
            'name'=>'test_student',
            'email'=>'teststudent@gmail.com',
            'password'=>bcrypt('password123'),
        ];

        User::create($user);
    }
}
