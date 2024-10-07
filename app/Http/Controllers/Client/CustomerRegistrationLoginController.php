<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CustomerRegistration;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Cart;

class CustomerRegistrationLoginController extends Controller
{
    //
    public function CustomerLoginPage(){

        return view('Client.Customer.Auth.login');
    }

    public function CustomerForgotPass(){

        return view('Client.Customer.Auth.forgot');
    }

    public function CustomerRegistartionPage(){

        return view('Client.Customer.Auth.registration');
    }

    public function CustomerRegistartionPost(Request $request){


        $request->validate([
            'email'=>'required',
            'password'=>'required',
            'password_confirmation' => 'required_with:password|same:password'
        ]);

        $exit = CustomerRegistration::where('email',$request->email)->exists();
        if($exit){
            $noti = array(
                'message'=>'This Email already exists,Please Try Another Email',
                'alert-type'=>'error'
            );

            return redirect()->back()->with($noti);
        }

        $code = rand(0000,9999);
        $customerId = rand(000,999);
        $user = new CustomerRegistration();
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->address = $request->address;
        // $user->mobile = $request->mobile;
        $user->after_password = $request->password;
        $user->password = Hash::make($request->password);
        $user->save();

        Session::put('customer_id',$user->id);
        Session::put('customer_name',$user->name);

        if (count(Cart::content())>0) {
            return redirect()->route('CheckoutPage');

        }else{
            return redirect()->route('Index');
        }

    }


    public function CustomerLoginPost(Request $request){


            $NumberMatch =CustomerRegistration::where('email',$request->email)->where('status','2')->first();
            if($NumberMatch){
                if (Hash::check($request->password, $NumberMatch->password)) {
                    if (count(Cart::content())>0) {
                        Session::put('customer_id',$NumberMatch->id);
                        Session::put('customer_name',$NumberMatch->name);
                        return redirect()->route('CheckoutPage');

                    }else{
                        // Session::put('customer_id',$NumberMatch->id);
                        // Session::put('customer_name',$NumberMatch->name);
                        return redirect()->route('Index');

                    }
                }else{
                    $noti = array(
                        'message'=>'Password Not Match! Please Try Again',
                        'alert-type'=>'error'
                    );

                    return redirect()->back()->with($noti);
                }
            }else{
                $noti = array(
                    'message'=>'Email Not Match! or Your account disabled Please Try Again',
                    'alert-type'=>'error'
                );

                return redirect()->back()->with($noti);
            }


    }

    public function CustomerForgotSubmit(Request $request){

        $user = CustomerRegistration::where('email',$request->email)->first();
        if($user){

            $oneTimePass = rand(1111111,9999999);

            $data =array(
                'email'=>$user->email,
                'us_name'=>$user->name,
                'OneTimePass'=>$oneTimePass,

            );

            Mail::send('Client/Mail/email_reset', $data, function ($message) use($data){
                $message->from('dfwblackcarlimollc@gmail.com', 'Ujjwala Care');
                $message->to($data['email'], 'Dear User');
                $message->subject('Customer Password Reset | Ujjwala Care');

            });


            $user->after_password = $oneTimePass;
            $user->password = Hash::make($oneTimePass);
            $user->save();




             return redirect()->route('CustomerLoginPage')->with(['successMessage'=>'Successfully Password Reset,Please Check Your Email']);


        }else{

                return redirect()->back()->with(['errorMessage'=>'Email Not Match!! Try Another Email']);
            }

    }
}
