<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'full_name' => 'Super Admin',
                'password' => bcrypt('8IZ6YY)LMx(Br3(&'),
                'email' => 'supedadmin@build.it',
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'role_id' => 1,
            ],
            [
                'full_name' => 'Build IT Stores',
                'password' => bcrypt('*wMxsxBGPR5F^cZr'),
                'email' => 'store@build.it',
                'created_at' => now(),
                'updated_at' => now(),
                'email_verified_at' => now(),
                'role_id' => 2,
            ],

        ];

        DB::table('users')->insert($users);
    }
}
