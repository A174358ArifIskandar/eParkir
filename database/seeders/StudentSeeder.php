<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('student_details')->insert([
            'matric_no' => 'A174358',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'arif15iskandar@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'G012',
            'student_image' => 'files\ObqRenGgHymdBYYFsTiYyAdzqDmyw6Es6wiT9CY7.jpg',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A174485',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'fadzrul.aiman@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'G018',
            'student_image' => 'files\AfPN3pz40JvN0GH7s29e0Kf3w07DqhgzC7uExAJa.jpg',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A123456',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'hanis.merlin@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'A1214',
            'student_image' => 'files\0ffrrrxEwRgQARrRiRSNhCy3IEpT6IYpLg1s5WJ9.jpg',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A173510',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'ain.mazlan19@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'A1104',
            'student_image' => 'files\026X3Nw7ASWeudtItJkm5XWP4z5H07yfe9TRZ0bX.png',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A174206',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'amalliatul@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'A2416',
            'student_image' => 'files\VQFmDNIwIZgrZ8d0KD2dUS4dN5eBkzArR3icUnwT.jpg',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A174291 ',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'azri@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'H1303',
            'student_image' => 'files\lcY8A3Apeo4ivoEBNhREXER3WQwAhtKdJ2s1ddTI.png',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A174476 ',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'fawwaz@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'H2021',
            'student_image' => 'files\SAEoJBQoY01OCrZAsXut0ADrkXkuL5PpvVzv8ucI.png',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'a175123 ',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'balqis@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'C1412',
            'student_image' => 'files\THrbbwLIwAH8582qMbfKVp7AGeTISDfSBFfDSfQf.jpg',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'a173465 ',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'aina@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'D1210',
            'student_image' => 'files\THrbbwLIwAH8582qMbfKVp7AGeTISDfSBFfDSfQf.jpg',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A173478  ',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'aisyah@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'D2012',
            'student_image' => 'files\THrbbwLIwAH8582qMbfKVp7AGeTISDfSBFfDSfQf.jpg',
        ]);
    }
}
