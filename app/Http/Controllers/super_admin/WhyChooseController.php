<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\WhyChoose;
use Illuminate\Http\Request;

class WhyChooseController extends Controller
{
    //

    public function WhyChooseIndex(){

        $data['index'] = WhyChoose::get();
        
        return view('Server.WhyChoose.index',$data);
    }

    public function WhyChooseEdit($id){

        $data['edit'] = WhyChoose::where('id',$id)->first();
        return view('Server.WhyChoose.edit',$data);
    }

    public function WhyChoosePost(Request $request){

        $update = WhyChoose::where('id',$request->edit_id)->first();
        $update->title = $request->title;
        $update->short = $request->short;
        $update->color = $request->color;
        $update->circle_color = $request->circle_color;
        $update->save();

        $noti = array(
            'message'=>'successfully updated',
            'alert-type'=>'success'
        );

        return redirect()->route('WhyChooseIndex')->with($noti);
    }
}
