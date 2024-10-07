<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;

use Auth;
class ContactUsController extends Controller
{
    public function ContactUsIndex(){

        $data['index'] = ContactUs::where('id','1')->first();
        
        return view('Server.ContactUs.index',$data);
 

    }

    public function ContactUsEdit($id){

        $data['edit'] = ContactUs::where('id',$id)->first();
        return view('Server.ContactUs.edit',$data);
  
    }

    public function ContactUsPost(Request $request){

        $update =  ContactUs::where('id','1')->first();
        $update->mobile_one = $request->mobile_one;
        $update->mobile_two = $request->mobile_two;
        $update->tel = $request->tel;
        $update->fax = $request->fax;
        $update->email_one = $request->email_one;
        $update->email_two = $request->email_two;
        $update->office_address = $request->office_address;
      
        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('ContactUsIndex')->with($noti);
    }
}
