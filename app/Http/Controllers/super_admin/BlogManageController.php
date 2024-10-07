<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\BlogManage;
use Illuminate\Http\Request;
use Image;

class BlogManageController extends Controller
{

    public function BlogCreate(){

        return view('Server.Blog.create');
    }
    
    public function BlogIndex(){
        $data['index'] = BlogManage::get();
        $data['blog_count'] = BlogManage::get()->count();
        return view('Server.Blog.index',$data);

    }


    public function BlogPost(Request $request){

        $store = new BlogManage();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('BlogIndex')->with($noti);
    }


    public function BlogUpdate(Request $request){

        $store = BlogManage::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('BlogIndex')->with($noti);
    }

    public function save(BlogManage $store,Request $request){

        $store->title = $request->title;
        $store->blog_date = $request->blog_date;
        $store->short = $request->short;
        $store->description = $request->description;
        $store->slug = str_replace(' ','-',$request->title);
        $store->meta_title = $request->meta_title;
        $store->meta_des = $request->meta_des;;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink('upload/BlogManage/'.@$store->image);
            $fullName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(370,226)->save('upload/BlogManage/'.$fullName);
            $store->image = $fullName;
            $store->save();
        }

        $store->save();
    }

    public function BlogEdit($id){

        $data['edit'] = BlogManage::where('id',$id)->first();
        $data['index'] = BlogManage::get();
        $data['blog_count'] = BlogManage::get()->count();
        return view('Server.Blog.edit',$data);


    }

    public function BlogDelete($id){



        $list = BlogManage::where('id',$id)->first();
        if($list){
            @unlink('upload/BlogManage/'.@$list->image);
            BlogManage::where('id',$id)->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('BlogIndex')->with($noti);

    }

    public function BlogMultipleDelete(Request $request){

        $delete = BlogManage::whereIn('id',$request->prints)->get();

        foreach(@$delete as $key=>$de){
            @unlink('upload/BlogManage/'.@$de->image);
            $de->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('BlogIndex')->with($noti);
    }


}
