<?php

namespace App\Http\Controllers;

/*
* User
* เมื่อผู้ใช้เข้าสู่ระบบ ระบบจะแสดงผลหน้าเริ่มต้นแก่ผู้ใช้
* @author : Phachara Aunkitti 64160280
* @created at : 2023-03-20
*/

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index()
    {
        return view('user.v_user_repair');
    }
}
