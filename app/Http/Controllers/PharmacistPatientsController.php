<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PharmacistPatientsController extends Controller
{
    public function index()
    {
        // Get all patients from users table
        $patients = User::where('role', 'Patient')->get();

        // Get the number of appointments each patient has made
        $appointmentsCount = DB::table('users')
            ->join('appointments', 'users.id', '=', 'appointments.patient_id')
            ->select('users.id', 'users.name', DB::raw('COUNT(appointments.id) as appointments_count'))
            ->where('users.role', 'Patient')
            ->groupBy('users.id', 'users.name')
            ->get();

        // Combine patients and appointments count data
        $patientsData = $patients->map(function ($patient) use ($appointmentsCount) {
            $appointmentCount = $appointmentsCount->where('id', $patient->id)->first();
            $patient->appointments_count = $appointmentCount ? $appointmentCount->appointments_count : 0;
            return $patient;
        });

        return view('pharmacist.patients.index', compact('patientsData'));
    }
}
