<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // ADMIN USER
        DB::table('users')->insert([
            'email' => 'admin@gmail.com',
            'first_name' => 'Admin',
            'last_name' => 'Account',
            'role' => 'Admin',
            'password' => Hash::make('User01'),
            'created_at' => '2022-08-24 16:33:33',
            'updated_at' => '2022-08-24 16:33:33'
        ]);
    }
}
