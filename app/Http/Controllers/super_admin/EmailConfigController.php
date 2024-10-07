<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\EmailConfig;
use Illuminate\Http\Request;

class EmailConfigController extends Controller
{
    //

    public function EmailConfig(){

        $data['index'] = EmailConfig::get();
        $data['edit'] = EmailConfig::where('id',1)->first();
        return view('Server.EmailConfig.index',$data);
    }

    public function EmailConfigPost(Request $request){

        $update = EmailConfig::where('id',1)->first();
        $update->mailer = $request->mailer;
        $update->mail_host = $request->mail_host;
        $update->mail_port = $request->mail_port;
        $update->mail_username = $request->mail_username;
        $update->mail_password = $request->mail_password;
        $update->mail_encryption = $request->mail_encryption;
        $update->mail_form_address = $request->mail_form_address;
        $update->mail_form_name = $request->mail_form_name;
        $update->mail_to = $request->mail_to;
        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($noti);
    }
}
