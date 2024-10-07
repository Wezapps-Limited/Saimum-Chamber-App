<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\SliderManage;
use Illuminate\Http\Request;

class SliderManageController extends Controller
{
    public function SliderIndex(){

        $data['index'] = SliderManage::get();

        return view('Server.Slider.index',$data);
    

    }

    public function SliderCreate(){
        

        return view('Server.Slider.create');
    
    }

    public function SliderPost(Request $request){

        $store = new SliderManage();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('SliderIndex')->with($noti);
    }


    public function SliderUpdate(Request $request){

        $store = SliderManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('SliderIndex')->with($noti);
    }

    public function save(SliderManage $store,Request $request){

        $store->title = $request->title;
        $store->short = $request->short;
        $store->book_meeting_link = $request->book_meeting_link;
        $store->contact_link = $request->contact_link;
        $store->book_meeting_link_url = $request->book_meeting_link_url;
        $store->contact_link_url = $request->contact_link_url;
    
        $store->save();
    }

    public function SliderEdit($id){

        $data['edit'] = SliderManage::where('id',$id)->first();
  
        return view('Server.Slider.edit',$data);
   

    }

    public function SliderDelete($id){
        
   
        $list = SliderManage::where('id',$id)->delete();
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('SliderIndex')->with($noti);
   
    }

    public function SliderMultipleDelete(Request $request){
        
   
        $list = SliderManage::whereIn('id',$request->prints)->get();

        foreach(@$list as $key=>$l){
            $l->delete();
        }
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('SliderIndex')->with($noti);
   
    }
}
