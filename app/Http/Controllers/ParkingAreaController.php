<?php

namespace App\Http\Controllers;

use App\Models\BookParking;
use App\Models\ParkingArea;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParkingAreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Auth::user()->role;
        //
        if ($role == 'admin') {
            $parkings = ParkingArea::all();
            $bookings = BookParking::all();
            $count = 0;
            return view('admin.editParking.editParkingArea', compact('parkings', 'bookings', 'count'));
        } else {
            $parkings = ParkingArea::all();
            $bookings = BookParking::all();
            $student = Student::where('matric_no', auth()->user()->matric_no)->first();
            $count = 0;
            return view('student.bookParking.studentParkingArea', compact('parkings', 'bookings', 'count', 'student'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.editParking.addParkingArea');
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
            'area_id' => 'required|alpha|unique:parking_area'

        ]);

        $name = $request->file('fileToUpload')->getClientOriginalName();

        $path = $request->file('fileToUpload')->store('public/files');

        ParkingArea::create([
            'area_id' => $request->area_id,
            'area_name' => $request->area_name,
            'area_image' => $path,
            'area_total_availability' => $request->quantity
        ]);
        return redirect()->route('parkingArea.index')->with('success', 'Parking Area has been added successfully');
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
        $role = Auth::user()->role;
        $parkings = ParkingArea::findOrFail($id);
        $bookings = BookParking::all();
        $count = 0;
        $name = 2;
        $student = Student::where('matric_no', auth()->user()->matric_no)->first();
        $booked = BookParking::where('area_id', $parkings->area_id)->get(['lot_status', 'book_id', 'lot_id'])->mapWithKeys(function ($item) {
            return [$item->lot_id => ['lot_status' => $item->lot_status, 'book_id' => $item->book_id]];
        });
        $lots = collect(range(1, $parkings->area_total_availability))->mapWithKeys(function ($item) use ($parkings) {
            return [$parkings->area_id . $item => null];
        })->merge($booked);
        // dd($lots);
        if ($role == 'admin') {
            return view('admin.editParking.displayParking', compact('parkings', 'lots', 'role','name','bookings','count'));
        } else {
            return view('student.bookParking.studentDisplay', compact('parkings', 'lots', 'role', 'student'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id,$name)
    {
        $role = Auth::user()->role;
        $parkings = ParkingArea::find($id);
        $bookings = BookParking::all();
        $count = 0;
        $student = Student::where('matric_no',auth()->user()->matric_no)->first();
        $booked = BookParking::where('area_id', $parkings->area_id)->get(['lot_status', 'book_id', 'lot_id'])->mapWithKeys(function ($item) {
            return [$item->lot_id => ['lot_status' => $item->lot_status, 'book_id' => $item->book_id]];
        });
        $lots = collect(range(1, $parkings->area_total_availability))->mapWithKeys(function ($item) use ($parkings) {
            return [$parkings->area_id . $item => null];
        })->merge($booked);
        return view('admin.editParking.disableParking', [
            'parkings' => $parkings,
            'name' => $name,
            'student'=>$student,
            'role'=>$role,
            'lots'=>$lots,
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
        $request->validate([
            'fileToUpload' => 'image|mimes:jpeg,png,jpg|max:2048',

        ]);
        $parking_id = ParkingArea::find($id);
        if ($request->hasFile('fileToUpload')) {
            $path = $request->file('fileToUpload')->store('public/files');
            $parking_id->area_image = $path;
        }

        $parking_id->area_id = $request->input('area_id');
        $parking_id->area_name = $request->input('area_name');

        $parking_id->area_total_availability = $request->input('quantity');
        $parking_id->update();

        return redirect()->route('parkingArea.index')->with('success', 'Parking Area has been updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($parking_id)
    {
        $parkings = BookParking::where('book_id',$parking_id)->pluck('area_id')->first();
        $color = BookParking::find($parking_id);
        $color->delete();
        return redirect()->route('parkingArea.show',$parkings)
            ->with('success', 'Parking Lot has been updated successfully');
    }
}
