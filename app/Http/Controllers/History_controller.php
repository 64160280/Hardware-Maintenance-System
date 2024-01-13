<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class History_controller extends Controller
{
    //
    public function history()
    {
        return view('user.v_user_history');
    }
    public function it_history()
    {
        return view('IT.v_it_history');
    }
}
