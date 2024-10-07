<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\CareerManage;
use App\Models\JoinUs;
use Illuminate\Http\Request;

class ContactMessageManage extends Controller
{
    //

    public function ContactMessageList(){

        $data['list'] = ContactForm::OrderBy('id','desc')->get();
        $data['list_m'] = ContactForm::OrderBy('id','desc')->get();

        return view('Server.ContactMessage.list',$data);
    }

    public function ContactMessageDelete($id){

        ContactForm::where('id',$id)->delete();
        return redirect()->back();
    }

    public function CareerMessageList(){

        $data['list'] = CareerManage::OrderBy('id','desc')->get();
        $data['list_m'] = CareerManage::OrderBy('id','desc')->get();

        return view('Server.CareerMessage.list',$data);
    }

    public function CareerMessageDelete($id){

        $find = CareerManage::where('id',$id)->first();
        if($find){
            @unlink('upload/Career/'.@$find->resume);
            CareerManage::where('id',$id)->delete();
        }
        return redirect()->back();
    }
    
    public function ContactMultipleDelete(Request $request){
        
         $delete = ContactForm::whereIn('id',$request->prints)->get();
        foreach(@$delete as $key=>$de){
     
            $de->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
        
        
    }
    
    public function CareerMultipleDelete(Request $request){
        
          $delete = CareerManage::whereIn('id',$request->prints)->get();

        foreach(@$delete as $key=>$de){
            @unlink('upload/Career/'.@$de->image);
            $de->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
        
        
    }


    public function JoinUsMessageList(){

        $data['list'] = JoinUs::OrderBy('id','desc')->get();
        $data['list_m'] = JoinUs::OrderBy('id','desc')->get();

        return view('Server.JoinUsMessage.list',$data);

    }

    public function JoinUsMessageDelete($id){

        JoinUs::where('id',$id)->delete();
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
    }


    public function JoinUsMultipleDelete(Request $request){
        
        $delete = JoinUs::whereIn('id',$request->prints)->get();
       foreach(@$delete as $key=>$de){
    
           $de->delete();
       }

       $noti = array(
           'message'=>'successfully Deleted',
           'alert-type'=>'success'
       );

       return redirect()->back()->with($noti);
       
       
   }
    
}
