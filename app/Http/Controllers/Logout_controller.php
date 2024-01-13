<?php

namespace App\Http\Controllers;

/*
* Logout
* เมื่อกดปุ่มออกจากระบบ คอนโทรลเลอร์ตัวนี้จะงาน โดยการกลับไปที่หน้าเข้าสู่ระบบ เคลียร์เซสชันและโทเคน
* @author : Phachara Aunkitti 64160280
* @created at : 2023-03-20
*/

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Logout_controller extends Controller
{
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return view('auth.v_login');
    }
}
