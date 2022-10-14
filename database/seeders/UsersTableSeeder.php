<?php

namespace Database\Seeders;

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
        $User = [
            [
                'id'	=> '1',
                'role_id'	=> '1',
                'name'	=> 'Admin',
                'no_telpon' => '123',
                'email'	=> 'admin@gmail.com',
                'password'	=> bcrypt('password')
            ]
        ];

        \DB::table('users')->insert($User);
    }
}
