<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;

class AppointmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::where('patient_id', auth()->id())->get();
        return view('patient.appointments.index', compact('appointments'));
    }

    public function create()
    {
        // Get a list of pharmacists for the dropdown
        $pharmacists = User::where('role', 'Pharmacist')->get();
        return view('patient.appointments.create', compact('pharmacists'));
    }

    public function store(Request $request)
    {
        // Validate and store the new appointment in the database
        $validatedData = $request->validate([
            'appointment_date' => 'required|date',
            'pharmacist_id' => 'required|exists:users,id,role,Pharmacist',
            'notes' => 'nullable|string',
        ]);

        // Create and store the appointment
        $appointment = new Appointment([
            'patient_id' => auth()->id(),
            'pharmacist_id' => $validatedData['pharmacist_id'],
            'appointment_date' => $validatedData['appointment_date'],
            'status' => 'pending',
            'notes' => $validatedData['notes'],
        ]);
        $appointment->save();

        return redirect()->route('patient.appointments.index')
            ->with('success', 'Appointment created successfully');
    }
}
