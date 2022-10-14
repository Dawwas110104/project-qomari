<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\Models\RoleUser;

class RoleUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $RoleUser = [
            [
                'id'	=> '1',
                'role'	=> 'admin',
            ],
            [
                'id'	=> '2',
                'role'	=> 'donatur',
            ],
        ];

        \DB::table('role_users')->insert($RoleUser);
    }
}
