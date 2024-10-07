<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\OurExperts;
use App\Models\OurExpertsInfo;
use Illuminate\Http\Request;
use Image;
use Svg\Tag\Rect;

class OurExpertManageController extends Controller
{
    public function OurExpertIndex(){

        $data['edit_status'] = false;
        $data['index'] = OurExperts::get();
        $data['category_count'] = OurExperts::get()->count();
        return view('Server.OurExpert.index',$data);

    }

    // public function OurExpertsTextPage(){

    //     $data['edit'] = OurExpertsText::where('id',1)->first();
    //     return view('Server.OurExperts.text_edit',$data);
    // }

    // public function OurExpertsTextUpdate(Request $request){
        
    //     $store = OurExpertsText::where('id',1)->first();
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         @unlink('upload/TestimonialText/'.@$store->image);
    //         $fullName = time().'.'.request()->image->getClientOriginalExtension();
    //         request()->image->move(public_path('upload/TestimonialText/'), $fullName);
    //         $store->image = $fullName;
    //         $store->save();
    //     }

    //     $noti = array(
    //         'message'=>'successfully Update',
    //         'alert-type'=>'success'
    //     );

    //     return redirect()->route('OurExpertsIndex')->with($noti);
    // }


    public function OurExpertPost(Request $request){

        $store = new OurExperts();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->route('OurExpertIndex')->with($noti);
    }


    public function OurExpertUpdate(Request $request){

        $store = OurExperts::where('id',$request->edit_id)->first();
        $this->save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route('OurExpertIndex')->with($noti);
    }

    public function save(OurExperts $store,Request $request){

        $store->name = $request->name;
        $store->email = $request->email;
        $store->description = $request->description;
        $store->designation = $request->designation;
        $store->status = $request->status;
        $store->mobile = $request->mobile??"";
        $store->mobile_one = $request->mobile_one??"";
        $store->tel = $request->tel??"";
        $store->linkedin = $request->linkedin??"";
        if ($request->hasFile('image')) {
            $image_footer = $request->file('image');
            $fullName_footer = 'image'.time().'.'.$image_footer->getClientOriginalExtension();
            @unlink('upload/OurExperts/'.$store->image);
            Image::make($image_footer)->resize(300,300)->save('upload/OurExperts/'.$fullName_footer);
            $store->image = $fullName_footer;
            $store->save();
        }
        if ($request->hasFile('hover_image')) {
            $image_hover_image = $request->file('hover_image');
            $fullName_image_hover_image = 'image'.time().'.'.$image_hover_image->getClientOriginalExtension();
            @unlink('upload/OurExperts/'.$store->hover_image);
            Image::make($image_hover_image)->resize(300,300)->save('upload/OurExperts/'.$fullName_image_hover_image);
            $store->hover_image = $fullName_image_hover_image;
            $store->save();
        }
        $store->save();
    }

    public function OurExpertEdit($id){

       
        $data['edit'] = OurExperts::where('id',$id)->first();
        $data['edit_status'] = true;
       
        $data['index'] = OurExperts::get();
        $data['category_count'] = OurExperts::get()->count();
        return view('Server.OurExpert.index',$data);


    }

    public function OurExpertDelete($id){



        $list = OurExperts::where('id',$id)->delete();
       
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('OurExpertIndex')->with($noti);

    }


    public function OurExpertInfoList($expert_id){

        $data['expert_id'] = $expert_id;

        $data['edit_status'] = false;
        $data['index'] = OurExpertsInfo::where('expert_id',$expert_id)->get();
        $data['category_count'] = OurExpertsInfo::where('expert_id',$expert_id)->get()->count();
        return view('Server.OurExpert.info_expertise_index',$data);
    }


    public function OurExpertInfoEdit($id){
        

        $data['edit'] = OurExpertsInfo::where('id',$id)->first();
        $data['edit_status'] = true;
        $data['expert_id'] = $data['edit']->expert_id;
        $data['index'] = OurExpertsInfo::where('expert_id',$data['edit']->expert_id)->get();
        $data['category_count'] = OurExpertsInfo::where('expert_id',$data['edit']->expert_id)->get()->count();
        return view('Server.OurExpert.info_expertise_index',$data);


    }

    public function OurExpertInfoDelete($id){


        $list = OurExpertsInfo::where('id',$id)->delete();
       
        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);

    }

    public function OurExpertInfoPost(Request $request){

        $store = new OurExpertsInfo();
        $this->Expertise_save($store,$request);

        $noti = array(
            'message'=>'successfully Stored',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);
    }


    public function OurExpertInfoUpdate(Request $request){

        // return $request->all();

        $store = OurExpertsInfo::where('id',$request->edit_id)->first();
        $this->Expertise_save($store,$request);

        $noti = array(
            'message'=>'successfully Updated',
            'alert-type'=>'success'
        );

        return redirect()->route("OurExpertInfoList",@$request->expert_id)->with($noti);
    }


    public function Expertise_save(OurExpertsInfo $store,Request $request){

        $store->name = $request->name;
        $store->expert_id = $request->expert_id;
        $store->save();
       

    }

}
