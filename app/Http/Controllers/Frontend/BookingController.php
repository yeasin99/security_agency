<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guard;
use App\Models\Booking;
use Carbon\Carbon;

class BookingController extends Controller
{
    public function showGuard($id)
    {
        $guard=Guard::find($id);
        
        return view('frontend.content.guard-show',compact('guard'));
    }



  public function booking(Request $request)
    {
        // dd($request->all());
        $guard=Guard::find($request->guard_id);
        $mon_diff = Carbon::parse($request->from_date)->format('m') -  Carbon::parse($request->to_date)->format('m');
        


        // $daysCalculate=strtotime($request->to_date)-strtotime($request->from_date);
        // $daysCalculate=round($daysCalculate / (60 * 60 * 24));
            Booking::create([
               'guard_id'=>$request->guard_id,
                'user_id'=>auth()->user()->id,
                'booking_from'=>$request->from_date,
                'booking_to'=>$request->to_date,
                'details'=>$request->details,
                'rate'=>$request->salary,
                'total'=>$request->salary*$mon_diff,
            ]);

            return redirect()->back()->with('message','Booking created Successfully');
    }
}
