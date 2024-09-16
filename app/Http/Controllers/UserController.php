<?php

namespace App\Http\Controllers;

use App\Models\carPart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index(){
          $data = carPart::all();
          return view("Dashboard.home",compact('data'));
      }
      
      
    public function login(Request $request)
    {
        // Validate the form data
        $formData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // If login is successful, redirect them to the intended page
            return redirect()->route("Dashboard"); // Replace 'dashboard' with your target route
        }

        // If unsuccessful, redirect back with form data
        return redirect()->route('login')->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->except('password'));
    }

  public  function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        redirect('/');
    }
    public function TestData(){
        $user = new User();
        $name = 'misheck';
        $email = "tellem@gmail.com";
        $passwd = "123456";
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($passwd);

        $user->save();

        return "Data Saved";




    }
      
}
