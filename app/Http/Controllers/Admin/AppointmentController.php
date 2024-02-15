<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::with('patient')->get();
        return view('admin.appointments.index', compact('appointments'));
    }

    public function approveAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'booked';
        $appointment->save();

        return redirect()->route('admin.appointments.index')
            ->with('success', 'Appointment approved successfully');
    }
    public function declineAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'declined';
        $appointment->save();

        return redirect()->route('admin.appointments.index')
            ->with('success', 'Appointment declined successfully');
    }
}
