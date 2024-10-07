<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\Permission;
use App\Models\User;
use App\Models\SocialIcon;
use Auth;
class SocialIconManageController extends Controller
{
    
    public function SocialIconIndex(){

        $data['index'] = SocialIcon::get();

        return view('Server.Social.index',$data);
    

    }

    public function SocialIconCreate(){
        

        return view('Server.Social.create');
    
    }

    public function SocialIconPost(Request $request){

        $store = new SocialIcon();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('SocialIconIndex')->with($noti);
    }


    public function SocialIconUpdate(Request $request){

        $store = SocialIcon::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('SocialIconIndex')->with($noti);
    }

    public function save(SocialIcon $store,Request $request){

        $store->icon = $request->icon;
        $store->url = $request->url;
    
        $store->save();
    }

    public function SocialIconEdit($id){

        $data['edit'] = SocialIcon::where('id',$id)->first();
  
        return view('Server.Social.edit',$data);
   

    }

    public function SocialIconDelete($id){
        
   
        $list = SocialIcon::where('id',$id)->delete();
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('SocialIconIndex')->with($noti);
   
    }

    public function SocialIconMultipleDelete(Request $request){
        
   
        $list = SocialIcon::whereIn('id',$request->prints)->get();

        foreach(@$list as $key=>$l){
            $l->delete();
        }
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('SocialIconIndex')->with($noti);
   
    }
}
