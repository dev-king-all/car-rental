<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $id = DB::table('users')->insertGetId([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'SuperAdmin',
            'is_verified' => '1',
        ]);
       DB::table('admin_profiles')->insert([
           'user_id' => $id
       ]);
    }
}
