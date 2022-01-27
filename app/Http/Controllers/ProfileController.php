<?php

namespace App\Http\Controllers;

use App\Models\BookingHistory;
use App\Models\BookParking;
use App\Models\ParkingArea;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $student = Student::where('matric_no',auth()->user()->matric_no)->first();
        return view('student.profile', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();
        $student = Student::where('matric_no',auth()->user()->matric_no)->first();
        $myParking = BookParking::where('matric_no',auth()->user()->matric_no)->first();
        return view('student.myParking.invoice', compact('student','current_date_time','myParking'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$name,$lotno)
    {
        //
        $role = Auth::user()->role;
        $parkings = ParkingArea::find($id);
        $student = Student::where('matric_no',auth()->user()->matric_no)->first();
        $bookings = BookParking::all();
        $count = 0;
        $booked = BookParking::where('area_id', $parkings->area_id)->get(['lot_status', 'book_id', 'lot_id'])->mapWithKeys(function ($item) {
            return [$item->lot_id => ['lot_status' => $item->lot_status, 'book_id' => $item->book_id]];
        });
        $lots = collect(range(1, $parkings->area_total_availability))->mapWithKeys(function ($item) use ($parkings) {
            return [$parkings->area_id . $item => null];
        })->merge($booked);
        return view('admin.editParking.enableParking', [
            'parkings' => $parkings,
            'name' => $name,
            'student'=>$student,
            'role'=>$role,
            'lots'=>$lots,
            'lotno'=>$lotno,
            'bookings'=>$bookings,
            'count'=>$count
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'fileToUpload' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);
        $profile_id = Student::find($id);
        if ($request->hasFile('fileToUpload')) {
            $path = $request->file('fileToUpload')->store('public/files');
            $profile_id->student_image = $path;
        }
        $profile = User::find($id);
        $profile_id->alt_email = $request->input('alt_email');
        $profile->user_phone = $request->input('user_phone');

        $profile->update();
        $profile_id->update();

        return redirect()->route('profile.index')->with('success', 'Your profile has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
