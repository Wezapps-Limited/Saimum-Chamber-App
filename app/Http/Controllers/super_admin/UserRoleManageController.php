<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRoleManageController extends Controller
{
    //

    public function UserRoleList(){

        $data['list'] = User::where('name','!=','SpAdmin')->get();
        return view('Server.RoleManage.list',$data);
    }

    public function UserRoleCreate(){

        return view('Server.RoleManage.create');
    }

    public function UserRoleStore(Request $request){

        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        $store = new User();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->password = Hash::make($request->password);
        $store->role = $request->role;
        $store->save();

        return redirect()->route('UserRoleList')->with('success', 'Successfully User Created.');
    }

    public function UserRoleUpdate(Request $request){

        

        $store = User::where('id',$request->edit_id)->first();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->role = $request->role;
        $store->save();

        return redirect()->route('UserRoleList')->with('updated', 'Successfully User Updated.');
    }

    public function UserRoleEdit($id){


        $data['edit'] =  User::where('id',$id)->first();
        return view('Server.RoleManage.edit',$data);

       
    }

    public function UserRoleDelete($id){

        User::where('id',$id)->delete();
        return redirect()->route('UserRoleList')->with('deleted', 'Successfully User deleted.');
    }


}
