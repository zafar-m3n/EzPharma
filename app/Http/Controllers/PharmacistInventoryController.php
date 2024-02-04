<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medication;

class PharmacistInventoryController extends Controller
{
    public function index()
    {
        $inventory = Medication::all();
        return view('pharmacist.inventory.index', compact('inventory'));
    }
}
