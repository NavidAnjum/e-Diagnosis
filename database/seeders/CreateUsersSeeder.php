<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [

            [

                'name'=>'Admin',

                'email'=>'admin@admin.com',

                'phone_number'=>'01890368',

                'is_admin'=>'1',

                'password'=> bcrypt('123456'),

            ],

            [

                'name'=>'User',

                'email'=>'user@user.com',

                'phone_number'=>'01890368',

                'is_admin'=>'0',

                'password'=> bcrypt('123456'),

            ],

        ];



        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
