<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        DB::table('users')->insert([
            'matric_no' => 'K173510',
            'user_name' => 'Nurul Ain',
            'user_email' => 'a173510@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'admin',
            'user_phone' => '012-3456789'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A123456',
            'user_name' => 'Hanis Batrisyia',
            'user_email' => 'a123456@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '011-2345510'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A174485',
            'user_name' => 'Fadzrul Aiman',
            'user_email' => 'a174485@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '011-2345512'
        ]);
    }
}
