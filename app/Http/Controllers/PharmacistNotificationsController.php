<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class PharmacistNotificationsController extends Controller
{

    public function index()
    {
        $notifications = Notification::where('user_id', auth()->id())->get();
        return view('pharmacist.notifications', compact('notifications'));
    }
}
