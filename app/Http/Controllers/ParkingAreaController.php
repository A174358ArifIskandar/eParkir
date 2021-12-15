<?php

namespace App\Http\Controllers;

use App\Models\ParkingArea;
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
        $role=Auth::user()->role;
        //
        if ($role == 'admin') {
            $parkings = ParkingArea::all();
            return view('admin.editParking.editParkingArea', compact('parkings'));
        } else {
            $parkings = ParkingArea::all();
            return view('student.bookParking.studentParkingArea' , compact('parkings'));
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
        //
        $parkings = ParkingArea::findOrFail($id);
        return view('admin.editParking.displayParking', compact('parkings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($parking_id)
    {
        $parking_id = ParkingArea::findOrFail($parking_id);
        return view('admin.editParking.updateParkingArea', compact('parking_id'));
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
    public function destroy($parking_id)
    {
        $color = ParkingArea::find($parking_id);
        $color->delete();
        return redirect()->route('parkingArea.index')
            ->with('success', 'Parking Area deleted successfully');
    }
}
