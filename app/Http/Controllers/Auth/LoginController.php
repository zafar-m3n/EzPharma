<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;  // Don't forget to add this use statement

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Add this method to handle post-login redirection based on user role
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'Admin') {
            return redirect()->route('admin.home');
        } elseif ($user->role === 'Pharmacist') {
            return redirect()->route('pharmacist.home');
        } elseif ($user->role === 'Patient') {
            return redirect()->route('patient.home');
        }

        return redirect()->route('/');
    }
}
