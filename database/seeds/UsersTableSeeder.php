<?php

use App\User;
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

        $user = [

            [

               'name'=>'SuperAdmin',

               'email'=>'superadmin@rajtechnologies.com',

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'Admin',

               'email'=>'admin@raviyafitness.com',

               'password'=> bcrypt('123456'),

            ],

            [

               'name'=>'User',

               'email'=>'user@rajtechnologies.com',

               'password'=> bcrypt('123456'),

            ],

        ];

  

        foreach ($user as $key => $value) {

            User::create($value);

        }

    }
}
