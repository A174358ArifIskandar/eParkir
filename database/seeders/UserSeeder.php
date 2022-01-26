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
            'user_email' => 'k173510@siswa.ukm.edu.my',
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

        DB::table('users')->insert([
            'matric_no' => 'A174358',
            'user_name' => 'Arif Iskandar',
            'user_email' => 'a174358@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '011-2936593'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A173510',
            'user_name' => 'Ain Mazlan',
            'user_email' => 'a173510@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '012-9678935'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A174206',
            'user_name' => 'Amalliatul',
            'user_email' => 'a174206@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '017-3546545'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A174291',
            'user_name' => 'Khairul Azri',
            'user_email' => 'a174291@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '012-5439876'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A174476',
            'user_name' => 'Asyraf Fawwaz',
            'user_email' => 'a174476@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '012-1432598'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A175123',
            'user_name' => 'Balqis Adrianna',
            'user_email' => 'a175123@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '019-0870954'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A173465',
            'user_name' => 'Nurul Aina',
            'user_email' => 'a173465@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '019-8460989'
        ]);

        DB::table('users')->insert([
            'matric_no' => 'A173478',
            'user_name' => 'Nurin Aisyah',
            'user_email' => 'a173478@siswa.ukm.edu.my',
            'password' => Hash::make('password'), // password
            'remember_token' => Str::random(10),
            'role' => 'student',
            'user_phone' => '019-3562413'
        ]);
    }
}
