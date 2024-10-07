<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LogManageController extends Controller
{
    //

    public function LogManageList(){

        $data['user'] = User::get();
        return view('Server.LogInfo.list',$data);
    }
}
