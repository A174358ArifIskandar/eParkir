<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'student_details';
    protected $fillable = ['matric_no','student_faculty','student_session','alt_email','college_name','room_no','student_image'];
    protected $primaryKey = 'matric_no';
    protected $keyType = 'string';

    public function getRouteKeyName()
    {
        return 'matric_no';
    }
    public function user(){
        return $this->belongsTo(User::class, 'matric_no');
    }
}
