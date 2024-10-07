<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubscriberManage;

class SubscriberManageController extends Controller
{
    //

    public function SubscriberList(){

        $data['index'] = SubscriberManage::get();
        $data['index_count'] = SubscriberManage::get()->count();
        return view('Server.Subscriber.index',$data);
    }
}
