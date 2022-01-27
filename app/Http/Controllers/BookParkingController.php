<?php

namespace App\Http\Controllers;

use App\Models\BookingHistory;
use App\Models\BookParking;
use App\Models\ParkingArea;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookParkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $studentParking = BookParking::all();
        // return view('student.bookParking.bookingform', compact('studentParking'));

        $parkings = ParkingArea::all();
        $student = Student::where('matric_no', auth()->user()->matric_no)->first();
        return view('student.bookParking.bookingform', compact('parkings', 'student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $myParking = BookParking::where('matric_no', auth()->user()->matric_no)->first();
        $student = Student::where('matric_no', auth()->user()->matric_no)->first();
        return view('student.myParking.studentmyParking', compact('myParking', 'student'));
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
        $role = Auth::user()->role;
        if ($role == 'admin') {
        } else {
            $validatedData = $request->validate([
                'fileToUpload' => 'required|image|mimes:jpeg,png,jpg|max:2048',
                'matric_no' => 'unique:book_parking'

            ]);


            $name = $request->file('fileToUpload')->getClientOriginalName();
            $path = $request->file('fileToUpload')->store('public/files');
        }
        $myParking = BookParking::all()->last();
        $numeric_id = intval(substr($myParking->book_id, 1)); //retrieve numeric value of 'V001' (1)
        $numeric_id++; //increment
        if (mb_strlen($numeric_id) == 1) {
            $zero_string = '00';
        } elseif (mb_strlen($numeric_id) == 2) {
            $zero_string = '0';
        } else {
            $zero_string = '';
        }
        $new_id = 'B' . $zero_string . $numeric_id;

        if ($role == 'admin') {
            BookParking::create([
                'book_id' => $new_id,
                'matric_no' => $request->matric_no,
                'plate_no' => $request->plate_no,
                'area_id' => $request->area_id,
                'lot_id' => $request->lot_id,
                'lot_status' => $request->lot_status,
                'license_image' => $request->fileToUpload,
            ]);
            return redirect()->route('parkingArea.show',$request->area_id)->with('success', 'Parking Lot has been updated successfully');
        } else {
            BookParking::create([
                'book_id' => $new_id,
                'matric_no' => $request->matric_no,
                'plate_no' => $request->plate_no,
                'area_id' => $request->area_id,
                'lot_id' => $request->lot_id,
                'lot_status' => $request->lot_status,
                'license_image' => $path,

            ]);
            return redirect()->route('parkingArea.index')->with('success', 'Booking has been updated successfully');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myParking = BookParking::findOrFail($id);
        $student = Student::where('matric_no', auth()->user()->matric_no)->first();
        return view('student.myParking.studentmyParking', compact('myParking', 'student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $lot)
    {
        $parkings = ParkingArea::find($id);
        $student = Student::where('matric_no', auth()->user()->matric_no)->first();
        return view('student.bookParking.bookingform', [
            'parkings' => $parkings,
            'lot' => $lot,
            'student' => $student
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
        $booking_id = BookingHistory::find($id);
        $booking_id->book_details_id = $request->input('area_id');
        $booking_id->area_name = $request->input('area_name');

        $booking_id->area_total_availability = $request->input('quantity');
        $booking_id->update();

        return redirect()->route('parkingArea.index')->with('status', 'File Has been updated successfully');
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
