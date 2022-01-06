<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingHistory extends Model
{
    use HasFactory;
    protected $table = 'booking_history';
    protected $fillable = ['book_details_id','matric_no','book_status','description'];
    protected $primaryKey = 'book_details_id';
    public $incrementing = false;
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'book_details_id';
    }
}
