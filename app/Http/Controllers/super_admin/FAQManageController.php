<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use App\Models\FaqText;
use Illuminate\Http\Request;

class FAQManageController extends Controller
{
    public function FaqIndex(){

        $data['edit_status'] = false;
        $data['index'] = Faq::get();
        $data['category_count'] = Faq::get()->count();
        return view('Server.Faq.index',$data);

    }

    public function FaqTextPage(){

        $data['edit'] = FaqText::where('id',1)->first();
        return view('Server.Faq.text_edit',$data);
    }

    public function FaqTextUpdate(Request $request){
        
        $store = FaqText::where('id',1)->first();
        $store->title = $request->title;
        $store->short = $request->short;
        $store->save();
        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        //     @unlink('upload/TestimonialText/'.@$store->image);
        //     $fullName = time().'.'.request()->image->getClientOriginalExtension();
        //     request()->image->move(public_path('upload/TestimonialText/'), $fullName);
        //     $store->image = $fullName;
        //     $store->save();
        // }

        $noti = array(
            'message'=>'successfully Update',
            'alert-type'=>'success'
        );

        return redirect()->route('FaqIndex')->with($noti);
    }


    public function FaqPost(Request $request){

        $store = new Faq();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('FaqIndex')->with($noti);
    }


    public function FaqUpdate(Request $request){

        $store = Faq::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('FaqIndex')->with($noti);
    }

    public function save(Faq $store,Request $request){

        $store->question = $request->question;
        $store->ans = $request->ans;
        $store->sequence = $request->sequence;
        $store->save();
    }

    public function FaqEdit($id){

        $data['edit'] = Faq::where('id',$id)->first();
        $data['edit_status'] = true;
        $data['index'] = Faq::get();
        $data['category_count'] = Faq::get()->count();
        return view('Server.Faq.index',$data);


    }

    public function FaqDelete($id){



        $list = Faq::where('id',$id)->delete();
       
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('FaqIndex')->with($noti);

    }

}
