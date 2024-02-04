<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('patient_id', auth()->id())->get();
        return view('patient.appointments.index', compact('appointments'));
    }
}
