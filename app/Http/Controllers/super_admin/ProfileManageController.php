<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;

class ProfileManageController extends Controller
{
    //

    public function Profile(){

        $data['profile'] = User::where('id',Auth::user()->id)->first();

      
        return view('Server.Profile.edit',$data);
    }

    public function ProfileUpdate(Request $request){

   
        $update = User::where('id',Auth::user()->id)->first();
        $update->name = $request->name;
        $update->user_name = $request->user_name;
        $update->phone = $request->phone;
        $update->email = $request->email;
         if($request->hasFile('image')){
            $image = $request->file('image');
            $fullName = time().'.'.$image->getClientOriginalExtension();
            @unlink('upload/Profile/'.$update->image);
            Image::make($image)->resize(660,660)->save('upload/Profile/'.$fullName);
            $update->image = $fullName;
            $update->save();
         }
        $update->save();

        $noti = array(
            'message'=>'successfully Profile update',
            'alert-type'=>'success'
        );
        
        return redirect()->back()->with($noti);
    }
}
