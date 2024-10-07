<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountSettingController extends Controller
{
    //Account Setting Controller

    public function AccountSettingForm(){
         return view('Server.AccountSetting.account_setting');
    }

    public function AccountSettingPost(Request $request){

       

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::where('id',Auth::user()->id)->first();

        if (Hash::check($request->old_password, $user->password)) {
            // The old password matches the hashed password in the database.
            // Proceed with updating the password.
            $user->after_password = $request->password;
            $user->password = Hash::make($request->password);
            $user->save();
               

            return redirect()->back()->with('success', 'Password updated successfully.');
        } else {
            // The old password does not match.
            return redirect()->back()->withErrors(['old_password' => 'Old password is incorrect. Please try again.']);
        }
    }
}
