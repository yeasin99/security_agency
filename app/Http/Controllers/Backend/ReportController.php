<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function report()
    {
         $title='Admin';
      
        return view("backend.content.report",compact('title'));
    }
}