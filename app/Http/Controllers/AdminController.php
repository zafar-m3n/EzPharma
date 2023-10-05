<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Medication;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Users CRUD functions
    public function showUsers()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'required|string|in:Admin,Patient',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User created successfully!');
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.users.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            'role' => 'required|string|in:Admin,Patient',
        ]);

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->role = $request->role;

        $user->save();

        return redirect()->route('admin.users')->with('success', 'User updated successfully!');
    }

    public function deleteUser($id)
    {
        User::find($id)->delete();
        return redirect()->route('admin.users')->with('success', 'User deleted successfully!');
    }


    // Medication CRUD functions
    public function showMedications()
    {
        $medications = Medication::all();
        return view('admin.medications.index', compact('medications'));
    }

    public function createMedication()
    {
        return view('admin.medications.create');
    }

    public function storeMedication(Request $request)
    {
        $request->validate([
            'Medication_Name' => 'required|string|max:255',
            'Stock_Count' => 'required|integer',
            'Expiry_Date' => 'required|date',
            'Supplier_Details' => 'required|string',
            'Cost_Price' => 'required|numeric',
            'Selling_Price' => 'required|numeric',
        ]);

        $medication = new Medication($request->all());

        $medication->save();

        return redirect()->route('admin.medications')->with('success', 'Medication added successfully!');
    }

    public function editMedication($id)
    {
        $medication = Medication::find($id);
        return view('admin.medications.edit', compact('medication'));
    }

    public function updateMedication(Request $request, $id)
    {
        $request->validate([
            'Medication_Name' => 'required|string|max:255',
            'Stock_Count' => 'required|integer',
            'Expiry_Date' => 'required|date',
            'Supplier_Details' => 'required|string',
            'Cost_Price' => 'required|numeric',
            'Selling_Price' => 'required|numeric',
        ]);

        $medication = Medication::find($id);
        $medication->fill($request->all());

        $medication->save();

        return redirect()->route('admin.medications')->with('success', 'Medication updated successfully!');
    }

    public function deleteMedication($id)
    {
        Medication::find($id)->delete();
        return redirect()->route('admin.medications')->with('success', 'Medication deleted successfully!');
    }

}
