<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Guard;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    { 
        $title='Dashboard';
        $guards = Guard::all()->count();
        $clients = User::where('role','user')->count();
        $booking = Booking::all();
        $totals = 0;
        if($booking->count() != 0){
            foreach($booking as $data){
                $totals = $totals + $data->total;
            }
        }
        

        return view("backend.content.dashboard",compact('title','guards','clients','totals'));
    }
}
