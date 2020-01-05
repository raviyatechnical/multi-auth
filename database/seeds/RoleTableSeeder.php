<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        $roles = [

            [

               'name'=>'ROLE_SUPERADMIN',

               'description'=>'A User with Super Admin Privilege',

            ],

            [

               'name'=>'ROLE_ADMIN',

               'description'=>'A User with Admin Privilege',

            ],

            [

               'name'=>'ROLE_USER',

               'description'=>'A User with User Privilege',

            ],

        ];

  

        foreach ($roles as $key => $value) {

            Role::create($value);

        }

    }
}
