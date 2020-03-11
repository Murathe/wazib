<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected function redirectTo()
    // {
    //     if(Auth::user()->usertype == 'admin')
    //     {
    //         return 'dashboard';
    //     }
    //     else
    //     {
    //         return 'home';
    //     }
    // }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function username()
    {
        return 'username';
    }
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function authenticate(Request $request){
        $rules = [
            'username' => 'required',
            'password' => 'required',

        ];

        $messages = [
            'username.required' => 'Enter username',
            'password.required' => 'Enter password ',


        ];
        $this->validate($request, $rules, $messages);

        $username = $request->input('username');
        $password = $request->input('password');

        $user = \DB::table('login')->where('username',$username)->limit(1)->first();
        if($user->username == $username && $user->password == $password)
        {
            session(['is_logged_in' => TRUE, 'therapist_name' => $user->username]);
            return redirect('dashboard');

        }
        else if($user->username != $username || $user->password !=$password)
        {
            $request->session()->flash('Incorrect_password','Invalid Username & Password.');
            // return redirect('/admin/login');
            echo "Wrong Password";

        }
    }
}
