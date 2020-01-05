<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Role_UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {

        $role_user = [

            [

               'role_id'=>'1',

               'user_id'=>'1',

            ],

            [

               'role_id'=>'2',

               'user_id'=>'2',

            ],

            [

			         'role_id'=>'3',

               'user_id'=>'3',

            ],

        ];

  

        foreach ($role_user as $key => $value) {

            DB::table('role_user')->insert($value);

        }
      }
}