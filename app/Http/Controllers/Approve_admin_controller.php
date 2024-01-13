<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\M_admin_approve;
use App\Models\User;
use Illuminate\Support\Facades\Auth;




class Approve_admin_controller extends Controller
{
    //
    public function approve()
    {
        // $history_approves = M_admin_approve::select('id')->get();
        $user = new User;
        $data_approve = $user->get_name('282');
        foreach ($data_approve as $data) {
            $tempdate =  $data['repair_request_date'];
            $arraycontent = explode('-', $tempdate);
            $day = strtok($arraycontent[2], ' ');
            $mount = $arraycontent[1];
            $year = $arraycontent[0];
            $data['repair_request_date'] = $day . '/' . $mount . '/' . $year;
        }
        // dd($data_approve);
        // dd($data_approve[0]['repair_request_date']);

        return view('admin.v_admin_approve', compact('data_approve'));
    }
}
