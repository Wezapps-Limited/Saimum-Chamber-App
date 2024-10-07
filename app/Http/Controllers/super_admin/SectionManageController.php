<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectionManage;
use App\Models\Organized;
use App\Models\Permission;
use App\Models\User;
use Image;
use Auth;


class SectionManageController extends Controller
{
      public function SectionIndex(){

        $data['index'] = SectionManage::get();

        return view('Server.Section.index',$data);
  
    }

    public function SectionEdit($id){

        $data['edit'] = SectionManage::where('id',$id)->first();
        return view('Server.Section.edit',$data);
  

    }


    public function SectionPost(Request $request){

        $store  = new SectionManage();
        $this->save($store,$request);
    
        $noti = array(
            'message'=>'successfully Store',
            'alert-type'=>'success'
        );
        return redirect()->route('SectionIndex')->with($noti);
    }
    
    public function SectionUpdate(Request $request){
        
        $store  = SectionManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);
        
        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('SectionIndex')->with($noti);
    }
    
    public function save(SectionManage $store,Request $request){
        
         $store->top_title = $request->top_title;
         $store->title = $request->title;
         $store->status = $request->status;
        $store->save();
    }
    
    public function SectionDelete($id){
        
        $store  = SectionManage::where('id',$id)->first();
        if($store){
          
               SectionManage::where('id',$id)->delete();
        }
        
                $noti = array(
            'message'=>'successfully Delete',
            'alert-type'=>'success'
        );
        return redirect()->route('SectionIndex')->with($noti);
    }
}
