<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::where('patient_id', auth()->id())->get();
        return view('patient.payments.index', compact('payments'));
    }
}
