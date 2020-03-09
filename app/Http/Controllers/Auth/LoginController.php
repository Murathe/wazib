<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/home';

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
            'myPassword' => 'required',
        ];

        $messages = [
            'username.required' => 'Enter username',
            'myPassword.required' => 'Enter password ',

        ];
        $this->validate($request, $rules, $messages);

        $username = $request->request->input('username');
        $myPassword = $request->input('myPassword');

        $user = DB::table('admin')->where('username,'$username)->limit(1)->first();
        if($user->username == $username && $user->password == $myPassword)
        {
            session(['is_logged_in' => TRUE]);
            return redirect('/admin/dashboard');
        }
        else if($user->username != $username || $user->password !=$myPassword)
        {
            $request->session()->flash('Incorrect_password','Invalid Username & Password.');
            return redirect('/admin/login');
        }
    }
}
