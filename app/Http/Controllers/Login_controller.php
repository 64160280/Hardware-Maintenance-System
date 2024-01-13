<?php

namespace App\Http\Controllers;

/*
* Login
* Check username and password and show page follow the role of user.
* @author : Phachara Aunkitti 64160280
* @created at : 2023-03-20
*/

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class Login_controller extends Controller
{
    use AuthenticatesUsers;
    /*
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'Login';

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('Logout');
    }

    /*
     * login
     * Check the request that includes with username and password.
     * @input : request
     * @output : view of user, IT, and Admin
     * @author : Phachara Aunkitti 64160280
     * @created at : 2023-03-20
     * @update date 1 : 2023-03-25
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role_id == 110) {
                return view('admin.v_admin_home');
            } else if (Auth::user()->role_id == 111) {
                return view('IT.v_it_approve');
            } else if (Auth::user()->role_id == 112) {
                return view('user.v_user_home');
            }
        }
        return view('auth.v_login');
    }
}
