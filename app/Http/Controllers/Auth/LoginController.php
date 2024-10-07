<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected function authenticated(Request $request, $user)
    {
        // Update the user's last login IP
        $user->update([
            'last_login_ip' => $request->getClientIp(),
            'last_login_time' => Carbon::now(),
            'last_device_name' => $request->header('User-Agent'),
        ]);
    }
    public function SuperAdminForgotPass(){
        return view('Server.Auth.forgot');
    }

    public function SuperAdminForgotSubmit(Request $request){

            $user = User::where('email',$request->email)->first();

            if($user){

            $oneTimePass = rand(1111111,9999999);

            $data =array(
                'email'=>$user->email,
                'us_name'=>$user->name,
                'OneTimePass'=>$oneTimePass,

            );

            Mail::send('Server/Mail/email_reset', $data, function ($message) use($data){
                $message->from('dfwblackcarlimollc@gmail.com', 'Ujjwala Care');
                $message->to($data['email'], 'Dear User');
                $message->subject('Password Reset | Ujjwala Care');

            });


            $user->after_password = $oneTimePass;
            $user->password = Hash::make($oneTimePass);
            $user->save();




             return redirect()->route('showAdminLoginForm')->with(['successMessage'=>'Successfully Password Reset,Please Check Your Email']);


            }else{

                return redirect()->back()->with(['errorMessage'=>'Email Not Match!! Try Another Email']);
            }




        }



    public function showAdminLoginForm(){

        return view('Server.Auth.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



}
