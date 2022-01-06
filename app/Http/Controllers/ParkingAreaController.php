<?php

namespace App\Http\Controllers;

use App\Models\BookParking;
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
        $role = Auth::user()->role;
        $parkings = ParkingArea::findOrFail($id);
        $booked = BookParking::where('area_id',$parkings->area_id)->get(['lot_status','book_id','lot_id'])->mapWithKeys(function($item){
            return [$item->lot_id=>['lot_status'=>$item->lot_status,'book_id'=>$item->book_id]];
        });
        $lots = collect(range(1,$parkings->area_total_availability))->mapWithKeys(function($item)use($parkings){
            return [$parkings->area_id.$item=>null];
        })->merge($booked);
        if ($role == 'admin') {
            return view('admin.editParking.displayParking', compact('parkings','lots'));
        } else {
            return view('student.bookParking.studentDisplay', compact('parkings','lots'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function edit($id)
    {
        $parkings = ParkingArea::find($id);
        return view('admin.editParking.updateParkingArea', compact('parkings'));
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
        if ($request->hasFile('fileToUpload')){
        $path = $request->file('fileToUpload')->store('public/files');
        $parking_id->area_image = $path;
        }
        
        $parking_id->area_id = $request->input('area_id');
        $parking_id->area_name = $request->input('area_name');
        
        $parking_id->area_total_availability = $request->input('quantity');
        $parking_id->update();
       
        return redirect()->route('parkingArea.index')->with('status', 'File Has been updated successfully');
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
