<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\VideoGallery;
use Illuminate\Http\Request;
use Image;

class VideoManageController extends Controller
{
    public function VideoIndex(){
        $data['edit_status'] = false;
        $data['index'] = VideoGallery::get();

        return view('Server.Video.index',$data);

    }

    public function VideoCreate(){
        return view('Server.Video.create');
    }



    public function VideoPost(Request $request){

        $store = new VideoGallery();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('VideoIndex')->with($noti);
    }


    public function VideoUpdate(Request $request){

        $store = VideoGallery::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('VideoIndex')->with($noti);
    }

    public function save(VideoGallery $store,Request $request){

        $store->title = $request->title;
        $store->video_link = $request->video_link;
        $store->sequence = $request->sequence;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink('upload/VideoImage/'.@$store->image);
            $fullName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(350,285)->save('upload/VideoImage/'.$fullName);
            $store->image = $fullName;
            $store->save();
        }
        $store->save();
    }

    public function VideoEdit($id){

        $data['edit'] = VideoGallery::where('id',$id)->first();
        $data['index'] = VideoGallery::get();
        return view('Server.Video.edit',$data);


    }

    public function VideoDelete($id){

        $list = VideoGallery::where('id',$id)->first();
        if($list){
            @unlink('upload/VideoImage/'.@$list->image);
            VideoGallery::where('id',$id)->delete();
        }

       

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('VideoIndex')->with($noti);

    }
    
    
        
    public function VideoMultipleDelete(Request $request){
        
         $delete = VideoGallery::whereIn('id',$request->prints)->get();
        foreach(@$delete as $key=>$de){
            @unlink('upload/VideoImage/'.@$de->image);
            $de->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
        
        
    }

    public function VideoActive($id){

        $active = VideoGallery::where('id',$id)->first();
        $active->status=2;
        $active->save();


        $noti = array(
            'message'=>'successfully Status Change',
            'alert-type'=>'success'
        );

        return redirect()->route('VideoIndex')->with($noti);
    }

    public function VideoDeActive($id){

        $active = VideoGallery::where('id',$id)->first();
        $active->status=1;
        $active->save();


        $noti = array(
            'message'=>'successfully Status Change',
            'alert-type'=>'success'
        );

        return redirect()->route('VideoIndex')->with($noti);
    }
}
