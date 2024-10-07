<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;
use App\Models\NewsManage;

class NewsManageController extends Controller
{
    public function NewsCreate(){

        return view('Server.News.create');
    }
    
    public function NewsIndex(){
        $data['index'] = NewsManage::get();
        $data['News_count'] = NewsManage::get()->count();
        return view('Server.News.index',$data);

    }


    public function NewsPost(Request $request){

        $store = new NewsManage();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('NewsIndex')->with($noti);
    }


    public function NewsUpdate(Request $request){

        $store = NewsManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('NewsIndex')->with($noti);
    }

    public function save(NewsManage $store,Request $request){

        $store->title = $request->title;
        $store->news_date = $request->news_date;
        $store->description = $request->description;
        $store->slug = str_replace(' ','-',$request->title);
         $store->meta_title = $request->meta_title;
        $store->meta_des = $request->meta_des;;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink('upload/NewsManage/'.@$store->image);
            $fullName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1000,667)->save('upload/NewsManage/'.$fullName);
            $store->image = $fullName;
            $store->save();
        }

        $store->save();
    }

    public function NewsEdit($id){

        $data['edit'] = NewsManage::where('id',$id)->first();
        $data['index'] = NewsManage::get();
        $data['News_count'] = NewsManage::get()->count();
        return view('Server.News.edit',$data);


    }

    public function NewsDelete($id){



        $list = NewsManage::where('id',$id)->first();
        if($list){
            @unlink('upload/NewsManage/'.@$list->image);
            NewsManage::where('id',$id)->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('NewsIndex')->with($noti);

    }

    public function NewsMultipleDelete(Request $request){

        $delete = NewsManage::whereIn('id',$request->prints)->get();

        foreach(@$delete as $key=>$de){
            @unlink('upload/NewsManage/'.@$de->image);
            $de->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('NewsIndex')->with($noti);
    }
}
