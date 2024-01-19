<?php

namespace App\Http\Controllers;
use App\Models\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function dashboard()
    {
        $forms = Form::all();
        $total = Form::count();
        return view('dashboard.dashboard', compact('forms', 'total'));
    }


    // protected function authenticated($request, $user)
    // {
    //     if ($user->role === 'admin') {
    //         return redirect()->route('admin.dashboard'); 
    //     }

    //     return redirect('/home'); 
    // }

    public function login()
     {
        return view('auth.login');

     }

     public function auth(Request $request)
     {
        // dd($request->all());
         $request->validate([
             'email' => 'required|exists:users,email',
             'password' => 'required',
             
         ],
         [
             'email.exists' => "email ini tidak tersedia"
         ]);
 
         $user = $request->only('email', 'password');
         if(Auth::attempt($user)){
              return redirect('/dashboard');
         }else{
             return redirect()->route('login')->with('fail', "Fail To Login");
         }

     }

     public function logout()
     {
         Auth::logout();
         return redirect('/login');
     }
}
