<?php

namespace App\Http\Controllers;
/*
* Home_controller
* ควบคุมการเข้าสู่ระบบโดยตรวจสอบจาก role ของแต่ละคน
* @author : Phachara Aunkitti 64160280
* @created at : 2023-03-20
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home_controller extends Controller
{
    protected $redirectTo = 'Login';
    public function index()
    {
        //ตรวจสอบโดยใช้ เมธอด check หากเข้าสู่ระบบได้ จะตรวจสอบ role ของ user แต่ละคน
        if (Auth::check()) {
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
