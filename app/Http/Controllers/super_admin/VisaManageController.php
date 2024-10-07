<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\VisaManage;
use App\Models\VisaManageGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class VisaManageController extends Controller
{


    public function VisaMultiGalleryIndex(){

        $data['index'] = VisaManageGallery::get();
        return view('Server.Visa.gallery_index',$data);
    }

    public function VisaMultiGalleryUpdate(Request $request){

        $old = VisaManageGallery::get();
        foreach(@$old as $key=>$o){
            @unlink('upload/VisaGallery/'.@$o->image);
            $o->delete();
        }

        // add item 
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $key => $img) {
        
                // Generate a unique filename for each image
                $imagefull = time().$key.'.'.$img->getClientOriginalExtension();
        
                // Move the uploaded file to the desired directory
                $img->move('upload/VisaGallery/', $imagefull);
        
                // Now create a thumbnail or resize the image if necessary
                $imagePath = 'upload/VisaGallery/' . $imagefull;
                Image::make($imagePath)->resize(600, 400)->save($imagePath);
        
                // Save the image filename to the database
                $add_item = new VisaManageGallery();
                $add_item->image = $imagefull;
                $add_item->save();
            }
        }
        

        $noti = array(
            'message'=>'successfully updated',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaIndex')->with($noti);
    }

    public function VisaIndex(){

        $data['index'] = VisaManage::selectRaw('type, count(*) as count')->groupBy('type')->get();
        return view('Server.Visa.index',$data);

    }


    public function VisaTypeIndex($type){

        $data['index'] = VisaManage::where('type',$type)->get();
        $data['type'] = $type;


        return view('Server.Visa.type_index',$data);
    

    }

    public function VisaCreate(){
        

        return view('Server.Visa.create');
    
    }

    public function VisaPost(Request $request){

        $store = new VisaManage();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaIndex')->with($noti);
    }


    public function VisaUpdate(Request $request){

        $store = VisaManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaIndex')->with($noti);
    }

    public function save(VisaManage $store,Request $request){

        $store->title = $request->title;
        $store->slug = Str::slug($request->title);
        $store->type = $request->type;
        $store->bg_color = $request->bg_color;
        $store->description = $request->description;
        $store->meta_title = $request->meta_title;
        $store->meta_des = $request->meta_des;
    
        $store->save();
    }

    public function VisaEdit($id){

        $data['edit'] = VisaManage::where('id',$id)->first();
  
        return view('Server.Visa.edit',$data);
   

    }

    public function VisaDelete($id){
        
   
        $list = VisaManage::where('id',$id)->delete();
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaIndex')->with($noti);
   
    }

    public function VisaMultiDelete(Request $request){
        
   
        $list = VisaManage::whereIn('id',$request->prints)->get();

        foreach(@$list as $key=>$l){
            $l->delete();
        }
    
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('VisaIndex')->with($noti);
   
    }
}
