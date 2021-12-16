<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingArea extends Model
{
    use HasFactory;
    protected $table = 'parking_area';
    protected $primaryKey = 'area_id';
    protected $fillable = ['area_id','area_name','area_image','area_total_availability'];
    public $incrementing = false;
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'area_id';
    }
}
