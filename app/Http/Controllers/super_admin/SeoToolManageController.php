<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoTool;
use App\Models\Permission;
use App\Models\User;
use Auth;
class SeoToolManageController extends Controller
{
    //

    public function SeoToolIndex(){

        $data['index'] = SeoTool::where('id','1')->first();
        
    $super = User::where('id',Auth::user()->id)->where('status','super_admin')->first();
      $users = User::where('id',Auth::user()->id)->where('status','user')->first();
     $pser = Permission::where('user_id',@$users->id)->first();
     if($super || ($users && $pser->seo_tools_view==2)){
        return view('Server.Seo.index',$data);
     }else{
         abort(403, 'Restricted Section');
     }

    }

    public function SeoToolEdit($id){
        $data['edit'] = SeoTool::where('id',$id)->first();
        
    $super = User::where('id',Auth::user()->id)->where('status','super_admin')->first();
      $users = User::where('id',Auth::user()->id)->where('status','user')->first();
     $pser = Permission::where('user_id',@$users->id)->first();
     if($super || ($users && $pser->seo_tools_edit==2)){
        return view('Server.Seo.edit',$data);
     }else{
         abort(403, 'Restricted Section');
     }
        
    }

    public function SeoToolPost(Request $request){

        $update =  SeoTool::where('id','1')->first();
        $update->meta_title = $request->meta_title;
        $update->meta_des = $request->meta_des;
        $update->header_code = $request->header_code;

      
        $update->save();

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );
        return redirect()->route('SeoToolIndex')->with($noti);
    }
}
