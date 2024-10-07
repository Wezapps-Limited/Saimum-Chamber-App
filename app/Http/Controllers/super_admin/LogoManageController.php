<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;
use Image;
use App\Models\User;
use Auth;
class LogoManageController extends Controller
{
    public function LogoIndex(){


        $data['index'] = Logo::where('id','1')->first();
 
        return view('Server.Logo.index',$data);
    

    }

    public function LogoEdit($id){
        $data['edit'] = Logo::where('id',$id)->first();
        
        return view('Server.Logo.edit',$data);
        
    }

    public function LogoPost(Request $request){

        $update =  Logo::where('id',$request->edit_id)->first();
        $update->description = $request->description;
        $update->registration_number = $request->registration_number;
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $fullName = time().'.'.$image->getClientOriginalExtension();
            @unlink('upload/Logo/'.$update->logo);
            Image::make($image)->resize(160,47)->save('upload/Logo/'.$fullName);
            $update->logo = $fullName;
            $update->save();
        }


        if ($request->hasFile('left_logo')) {
            $image_left_logo = $request->file('left_logo');
            $fullName_image_left_logo = 'left_logo'.time().'.'.$image_left_logo->getClientOriginalExtension();
            @unlink('upload/Logo/'.$update->left_logo);
            Image::make($image_left_logo)->resize(272,116)->save('upload/Logo/'.$fullName_image_left_logo);
            $update->left_logo = $fullName_image_left_logo;
            $update->save();
        }

        if ($request->hasFile('footer_logo')) {
            $image_footer = $request->file('footer_logo');
            $fullName_footer = 'footer_logo'.time().'.'.$image_footer->getClientOriginalExtension();
            @unlink('upload/Logo/'.$update->footer_logo);
            Image::make($image_footer)->resize(67,90)->save('upload/Logo/'.$fullName_footer);
            $update->footer_logo = $fullName_footer;
            $update->save();
        }


        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('LogoIndex')->with($noti);
    }
}
