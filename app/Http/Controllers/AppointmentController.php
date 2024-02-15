<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;

class AppointmentController extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $upcomingAppointments = Appointment::with(['patient', 'pharmacist'])
            ->where('patient_id', $userId)
            ->where('status', 'pending')
            ->get();

        $confirmedAppointments = Appointment::with(['patient', 'pharmacist'])
            ->where('patient_id', $userId)
            ->where('status', 'booked')
            ->get();

        $pastAppointments = Appointment::with(['patient', 'pharmacist'])
            ->where('patient_id', $userId)
            ->where(function ($query) {
                $query->where('status', 'cancelled')
                    ->orWhere('status', 'declined')
                    ->orWhere('status', 'completed');
            })
            ->get();

        return view('patient.appointments.index', compact('upcomingAppointments', 'confirmedAppointments', 'pastAppointments'));
    }
    public function create()
    {
        $pharmacists = User::where('role', 'Pharmacist')->get();
        return view('patient.appointments.create', compact('pharmacists'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'appointment_date' => 'required|date',
            'appointment_time' => 'required|date_format:H:i',
            'pharmacist_id' => 'required|exists:users,id,role,Pharmacist',
            'notes' => 'nullable|string',
        ]);

        $appointment = new Appointment([
            'patient_id' => auth()->id(),
            'pharmacist_id' => $validatedData['pharmacist_id'],
            'appointment_date' => $validatedData['appointment_date'],
            'appointment_time' => $validatedData['appointment_time'],
            'status' => 'pending',
            'notes' => $validatedData['notes'],
        ]);

        $appointment->save();

        return redirect()->route('patient.appointments.index')
            ->with('success', 'Appointment created successfully');
    }

    public function cancelAppointment($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = 'cancelled';
        $appointment->save();

        return redirect()->route('patient.appointments.index')
            ->with('success', 'Appointment cancelled successfully');
    }
}
