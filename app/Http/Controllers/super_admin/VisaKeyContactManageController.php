<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\VisaKeyContact;
use Illuminate\Http\Request;
use Image;

class VisaKeyContactManageController extends Controller
{
    public function VisaKeyContactIndex(){

        $data['index'] = VisaKeyContact::get();

        return view('Server.KeyContact.index',$data);
    

    }

    public function VisaKeyContactCreate(){
        

        return view('Server.KeyContact.create');
    
    }

    public function VisaKeyContactPost(Request $request){

        $store = new VisaKeyContact();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaKeyContactIndex')->with($noti);
    }


    public function VisaKeyContactUpdate(Request $request){

        $store = VisaKeyContact::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaKeyContactIndex')->with($noti);
    }

    public function save(VisaKeyContact $store,Request $request){

        $store->name = $request->name;
        $store->designation = $request->designation;
        $store->email = $request->email;
        $store->url = $request->url;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink('upload/KeyContact/'.@$store->image);
            $fullName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/KeyContact/'.$fullName);
            $store->image = $fullName;
            $store->save();
        }
        $store->save();
    }

    public function VisaKeyContactEdit($id){

        $data['edit'] = VisaKeyContact::where('id',$id)->first();
  
        return view('Server.KeyContact.edit',$data);
   

    }

    public function VisaKeyContactDelete($id){
        
   
        $list = VisaKeyContact::where('id',$id)->delete();
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaKeyContactIndex')->with($noti);
   
    }

    public function VisaKeyContactMultiDelete(Request $request){
        
   
        $list = VisaKeyContact::whereIn('id',$request->prints)->get();

        foreach(@$list as $key=>$l){
            $l->delete();
        }
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaKeyContactIndex')->with($noti);
   
    }
}
