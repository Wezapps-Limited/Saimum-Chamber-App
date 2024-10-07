<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryManage;
use Illuminate\Http\Request;
use Image;

class GalleryManageController extends Controller
{
    public function GalleryIndex(){
        $data['edit_status'] = false;
        $data['index'] = CategoryManage::get();
        // $data['category_count'] = CategoryManage::get()->count();
        return view('Server.Gallery.index',$data);

    }

    public function GalleryCreate(){
        return view('Server.Gallery.create');
    }



    public function GalleryPost(Request $request){

        $store = new CategoryManage();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('GalleryIndex')->with($noti);
    }


    public function GalleryUpdate(Request $request){

        $store = CategoryManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('GalleryIndex')->with($noti);
    }

    public function save(CategoryManage $store,Request $request){

        $store->title = $request->title;
        $store->sequence = $request->sequence;
        $store->slug = str_replace(' ','-',$request->title);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink('upload/CategoryManage/'.@$store->image);
            $fullName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(600,400)->save('upload/CategoryManage/'.$fullName);
            $store->image = $fullName;
            $store->save();
        }

        $store->save();
    }

    public function GalleryEdit($id){

        $data['edit'] = CategoryManage::where('id',$id)->first();
        $data['index'] = CategoryManage::get();
        return view('Server.Gallery.edit',$data);


    }

    public function GalleryDelete($id){

        $list = CategoryManage::where('id',$id)->first();
        if($list){
            @unlink('upload/CategoryManage/'.@$list->image);
            CategoryManage::where('id',$id)->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('GalleryIndex')->with($noti);

    }
    
    
        
    public function GalleryMultipleDelete(Request $request){
        
         $delete = CategoryManage::whereIn('id',$request->prints)->get();
        foreach(@$delete as $key=>$de){
      @unlink('upload/CategoryManage/'.@$de->image);
            $de->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
        
        
    }

    public function GalleryActive($id){

        $active = CategoryManage::where('id',$id)->first();
        $active->status=2;
        $active->save();


        $noti = array(
            'message'=>'successfully Status Change',
            'alert-type'=>'success'
        );

        return redirect()->route('GalleryIndex')->with($noti);
    }

    public function GalleryDeActive($id){

        $active = CategoryManage::where('id',$id)->first();
        $active->status=1;
        $active->save();


        $noti = array(
            'message'=>'successfully Status Change',
            'alert-type'=>'success'
        );

        return redirect()->route('GalleryIndex')->with($noti);
    }
}
