<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientManageController extends Controller
{
    public function ClientIndex(){

        $data['edit_status'] = false;
        $data['index'] = Client::get();
        $data['category_count'] = Client::get()->count();
        return view('Server.Client.index',$data);

    }



    public function ClientPost(Request $request){

        $store = new Client();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('ClientIndex')->with($noti);
    }


    public function ClientUpdate(Request $request){

        $store = Client::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('ClientIndex')->with($noti);
    }

    public function save(Client $store,Request $request){

        $store->short = $request->short;
        $store->sequence = $request->sequence;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            @unlink('upload/Client/'.@$store->image);
            $fullName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('upload/Client/'), $fullName);
            $store->image = $fullName;
            $store->save();
        }

        $store->save();
    }

    public function ClientEdit($id){

        $data['edit'] = Client::where('id',$id)->first();
        $data['edit_status'] = true;
        $data['index'] = Client::get();
        $data['category_count'] = Client::get()->count();
        return view('Server.Client.index',$data);


    }

    public function ClientDelete($id){



        $list = Client::where('id',$id)->first();
        if($list){
            @unlink('upload/Client/'.@$list->image);
            Client::where('id',$id)->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('ClientIndex')->with($noti);

    }

}
