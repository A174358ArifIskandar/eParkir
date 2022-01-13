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
            'student_image' => 'public\files\ObqRenGgHymdBYYFsTiYyAdzqDmyw6Es6wiT9CY7',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A174485',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'fadzrul.aiman@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'G018',
            'student_image' => 'public\files\ObqRenGgHymdBYYFsTiYyAdzqDmyw6Es6wiT9CY7',
        ]);

        DB::table('student_details')->insert([
            'matric_no' => 'A123456',
            'student_faculty' => 'Information Science & Technology',
            'student_session' => '2019/2020',
            'alt_email' => 'hanis.merlin@gmail.com',
            'college_name' => 'Pendeta Zaba',
            'room_no' => 'A1214',
            'student_image' => 'public\files\ObqRenGgHymdBYYFsTiYyAdzqDmyw6Es6wiT9CY7',
        ]);
    }
}
