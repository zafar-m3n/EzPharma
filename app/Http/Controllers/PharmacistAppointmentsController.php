<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class PharmacistAppointmentsController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('patient')->get();
        return view('pharmacist.appointments.index', compact('appointments'));
    }
}
