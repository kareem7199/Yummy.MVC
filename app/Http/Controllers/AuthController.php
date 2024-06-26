<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
 
class AuthController extends Controller
{
 
    public function login()
    {
        return view('auth.login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/dashboard/home');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return to_route('login.index');
    }
}