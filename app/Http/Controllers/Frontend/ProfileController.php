<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class ProfileController extends Controller
{
    public function showProfile()
    {

        $guard = Booking::where('user_id',auth()->user()->id)->get();
        return view('frontend.content.profile', compact('guard'));
    }
}
