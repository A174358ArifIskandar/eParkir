<?php

namespace App\Http\Controllers;

use App\Models\BookParking;
use App\Models\ParkingArea;
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
        return view('student.bookParking.bookingform', compact('parkings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $MyParking = BookParking::all();
        return view('student.myParking.studentmyParking', compact('MyParking'));
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
        $validatedData = $request->validate([
            'fileToUpload' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'matric_no' => 'unique:book_parking'

        ]);

        $name = $request->file('fileToUpload')->getClientOriginalName();

        $path = $request->file('fileToUpload')->store('public/files');

        BookParking::create([
            'book_id' => uniqid('B', true),
            'matric_no' => $request->matric_no,
            'plate_no' => $request->plate_no,
            'area_id' => $request->area_id,
            'lot_id' => $request->lot_id,
            'lot_status' => $request->lot_status,
            'license_image' => $path,
        ]);
        return redirect()->route('parkingArea.index')->with('status', 'File Has been uploaded successfully');
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
        return view('student.myParking.studentmyParking', compact('myParking'));
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
        return view('student.bookParking.bookingform', [
            'parkings' => $parkings,
            'lot' => $lot
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
