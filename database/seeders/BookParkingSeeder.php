<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookParkingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('book_parking')->insert([
            'book_id' => 'B001',
            'matric_no' => 'A174358',
            'plate_no' => 'ALA 1234',
            'area_id' => 'A',
            'lot_id' => 'A01',
            'lot_status' => 'approved',
            'license_image' => 'public\files\ObqRenGgHymdBYYFsTiYyAdzqDmyw6Es6wiT9CY7',
        ]);
        DB::table('booking_history')->insert([
            'book_details_id' => 'D001',
            'matric_no' => 'A174358',
            'book_status' => 'declined',
            'description' => '',
        ]);
    }
}
