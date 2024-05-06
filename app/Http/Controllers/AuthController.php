<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function register()
    {
        return view('register');
    }

    public function auth_index(Request $request)
    {

        //dd($request->all());
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            if ($request->email === 'admin@gmail.com') {
                // Redirect admin user to a different page
                return redirect()->route('submissions.index'); // Change 'admin.dashboard' to your admin dashboard route name
            }

            // For non-admin users, you can handle their login here
            return redirect()->intended('/nmu'); // Redirect to the intended page after login
        }
        else
            {
                return redirect()->back()->with('error',"please enter correct email or password");
            }
    }

    public function create_user(Request $request)
    {
        //dd($request->all());
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->save();
       
        return redirect('/')->with('success'," Register success");
     }
}
