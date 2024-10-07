<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Image;

class AboutManageController extends Controller
{
    public function AboutUsIndex(){

        $data['index'] = AboutUs::where('id','1')->first();
 
        return view('Server.About.index',$data);
    

    }

    public function AboutUsEdit($id){
        $data['edit'] = AboutUs::where('id',$id)->first();
        
        return view('Server.About.edit',$data);
        
    }

    public function AboutUsPost(Request $request){

        $update =  AboutUs::where('id',$request->edit_id)->first();
        $update->title = $request->title;
        $update->short = $request->short;
        $update->description = $request->description;
        $update->story = $request->story;
        $update->story_text = $request->story_text;
        $update->mission = $request->mission;
        $update->mission_short = $request->mission_short;
        $update->value = $request->value;
        $update->value_short = $request->value_short;
        $update->smt_one = $request->smt_one;
        $update->smt_one_color = $request->smt_one_color;
        $update->smt_two = $request->smt_two;
        $update->smt_two_color = $request->smt_two_color;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fullName = time().'.'.$image->getClientOriginalExtension();
            @unlink('upload/AboutUs/'.$update->image);
            Image::make($image)->resize(500,500)->save('upload/AboutUs/'.$fullName);
            $update->image = $fullName;
            $update->save();
        }


        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('AboutUsIndex')->with($noti);
    }
}
