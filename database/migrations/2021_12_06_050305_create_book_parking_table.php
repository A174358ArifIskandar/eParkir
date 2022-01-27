<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateBookParkingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_parking', function (Blueprint $table) {
            $table->string('book_id');
            $table->string('matric_no');
            $table->string('plate_no');
            $table->string('area_id');
            $table->string('lot_id');
            $table->enum('lot_status',["pending","approved","notpaid","disabled"]);
            $table->string('license_image');

            $table->foreign('matric_no')->references('matric_no')->on('users')->onDelete('cascade');
            $table->foreign('area_id')->references('area_id')->on('parking_area')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_parking');
    }
}
