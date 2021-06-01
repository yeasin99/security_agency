<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function report()
    {
        //  $title='Admin';
        $payment=Payment::with(['user'])->where('status','Paid')->get();
         
        if(isset($_GET['from_date']))
        {
            $fromDate = date('Y-m-d',strtotime($_GET['from_date']));
            $toDate = date('Y-m-d',strtotime($_GET['to_date']));

            // dd( $fromDate, $toDate);
            $payment =Payment::whereBetween('created_at',[$fromDate,$toDate])->get();
            // dd( $sales);
        }
      
        return view("backend.content.report",compact('payment'));
    }
}
