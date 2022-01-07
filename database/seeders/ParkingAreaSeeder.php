<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkingAreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('parking_area')->insert([
            'area_id' => 'A',
            'area_name' => 'Blok A',
            'area_image' => 'public/files/u8ZvVupxJn3Q5x9xHruBYPcrYQxSsNAIaVsa7m7Z.jpg',
            'area_total_availability' => '20',
        ]);

        DB::table('parking_area')->insert([
            'area_id' => 'F',
            'area_name' => 'Blok F',
            'area_image' => 'public/files/aat86E17T7HjOmfWEcprOP374GauGOfrz8yJiK0g.jpg',
            'area_total_availability' => '15',
        ]);
    }
}
