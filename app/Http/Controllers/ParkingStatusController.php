<?php

namespace App\Http\Controllers;

use App\Models\BookingHistory;
use App\Models\BookParking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParkingStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $role = Auth::user()->role;
        if ($role == 'admin') {
            $bookings = BookParking::where('lot_status','notpaid')->orWhere('lot_status','pending')->get();
            $count = 0;
            return view('admin.ManageBooking.bookingRequest', compact('bookings','count'));
        } else {
            return view('layouts.error');
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
        $histories = BookingHistory::all();
        $bookings = BookParking::all();
        $count = 0;
        return view('admin.ManageBooking.bookingHistory', compact('histories','bookings','count'));
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
        if ($request->book_status == 'notpaid') {
        } else {
            $myParking = BookingHistory::all()->last();
            $numeric_id = intval(substr($myParking->book_details_id, 1)); //retrieve numeric value of 'V001' (1)
            $numeric_id++; //increment
            if (mb_strlen($numeric_id) == 1) {
                $zero_string = '00';
            } elseif (mb_strlen($numeric_id) == 2) {
                $zero_string = '0';
            } else {
                $zero_string = '';
            }
            $new_id = 'D' . $zero_string . $numeric_id;
            $desc = $request->description . ' ' . $request->other;
            BookingHistory::create([
                'book_details_id' => $new_id,
                'matric_no' => $request->matric_no,
                'book_status' => $request->book_status,
                'description' => $desc,
            ]);
        }
        $lotStatus = BookParking::find($request->book_details_id);
        if ($request->book_status == 'notpaid') {
            $lotStatus->update(['lot_status' => 'notpaid']);
        } else if ($request->book_status == 'approved') {
            $lotStatus->update(['lot_status' => 'approved']);
        } else if ($request->book_status == 'declined') {
            $lotStatus->delete();
        }
        return redirect()->route('parkingStatus.index')->with('success', 'Booking Request has been updated successfully');
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
        if ($role == 'admin') {
            $bookingids = BookParking::findOrFail($id);
            $bookings = BookParking::all();
            $count = 0;
            return view('admin.ManageBooking.formRequest', compact('bookingids','bookings','count'));
        } else {
            return view('layouts.error');
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
        //
        $bookingids = BookParking::findOrFail($id);
        $bookings = BookParking::all();
        $count = 0;
        return view('admin.ManageBooking.declineDescription', compact('bookingids','bookings','count'));
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
