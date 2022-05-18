<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function hoangha(){
        return view('hoangha');
    }

    public function register(){
        return view('user/register');
    }

    public function login(){
        return view('user/login');
    }

    public function info(){
        return view('user/info');
    }

    public function register_action(Request $request){

        $request -> validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
            'comfirm_password' => 'required|same:password',
            'email' => 'required',
            'gender' => 'required',
            'phone' => 'required|min:10',
            'date_of_birth' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'city' => $request->city,
            'district' => $request->district,
        ]);
        $user->save();
        return redirect()->route('hoangha')->with('success', 'Registration success. Please login!');;
    }

    public function login_action(Request $request){

        $request -> validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return view('hoangha');
        }
        else{
            return view('user/login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
