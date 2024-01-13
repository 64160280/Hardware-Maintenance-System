<?php

namespace App\Http\Controllers;

/*
* Controller
* Check username and password and show page follow the role of user.
* @author : Phachara Aunkitti 64160280
* @created at : 2023-03-20
*/

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
