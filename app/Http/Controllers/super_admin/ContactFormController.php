<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactForm;

class ContactFormController extends Controller
{
    //

    public function ContactList(){

        $data['index'] = ContactForm::get();
        $data['index_count'] = ContactForm::get()->count();
        return view('Server.contact_form.index',$data);
    }

    public function ContactDelete($id){
        ContactForm::where('id',$id)->delete();

        $noti = array(
            'message'=>'successfully deleted',
            'alert-type'=>'success'

        );

        return redirect()->back()->with($noti);

    }
}
