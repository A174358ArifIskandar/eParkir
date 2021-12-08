<?php

namespace App\Http\Controllers;

use App\Models\ParkingArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $role=Auth::user()->role;

        if($role=='admin')
        {
            $parkings = ParkingArea::all();
            return view('home', compact('parkings'));
        }
        else
        {
            return view('dashboard');
        }
        
    }
}
