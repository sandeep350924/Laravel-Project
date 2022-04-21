<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Prescription;

class PrescriptionController extends Controller
{
    public function index()
    {
        $booking = Booking::where('date',date('Y-m-d'))->where('status',1)->get();
        return view('Prescription.index',compact('bookings'));
    }
}
