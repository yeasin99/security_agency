<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\confirmationmail;
use Illuminate\Http\Request;
use App\Models\Guard;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function showGuard($id)
    {
        $guard = Guard::find($id);

        return view('frontend.content.guard-show', compact('guard'));
    }
    public function showGuardBooking($id)
    {
        $guard = Guard::find($id);

        return view('frontend.content.single-guard', compact('guard'));
    }



    public function booking(Request $request)
    {

        // dd($request->all());
        $guard = Guard::find($request->guard_id);
        $mon_diff = Carbon::parse($request->from_date)->format('m') -  Carbon::parse($request->to_date)->format('m');
        
        $fromDate = $request->from_date . '-01';
        $toDate = $request->to_date . '-30';

        $checkAvailable = Booking::query()->where('guard_id', $request->guard_id);

        $checkAvailable->where(function ($query) use ($fromDate, $toDate) {
            $query->whereBetween('booking_from', [$fromDate, $toDate])->orWhereBetween('booking_to', [$fromDate, $toDate]);
        });

        if($mon_diff > 1){
            return redirect()->route('show.guard', $request->guard_id)->with('success', 'Date Invalid.');
        }else{
            if ($checkAvailable->count() == 0) {
                // $daysCalculate=strtotime($request->to_date)-strtotime($request->from_date);
                // $daysCalculate=round($daysCalculate / (60 * 60 * 24));

            

              $add=  Booking::create([
                    'guard_id' => $request->guard_id,
                    'user_id' => auth()->user()->id,
                    'booking_from' => $fromDate,
                    'booking_to' => $toDate,
                    'details' => $request->details,
                    'rate' => $request->salary,
                    'total' => $request->salary * $mon_diff * -1,
                ]);
                Mail::to(auth()->user()->email)->send(new confirmationmail($add));
                return redirect()->route('homepage')->with('success', 'Booking created Successfully');
            } else {
                return redirect()->route('show.guard', $request->guard_id)->with('success', 'Already Booked.');
            }
    }

        
    }
    public function guardPayment($id)
    {
        $guard = Guard::find($id);
        return view('frontend.content.client-payment');
        // return redirect()->route('payment.guard', $request->guard_id)->with('success', 'Booking created Successfully');
        
        // Mail::to(auth()->user()->email)->send(new confirmationmail($add));
    }
}
