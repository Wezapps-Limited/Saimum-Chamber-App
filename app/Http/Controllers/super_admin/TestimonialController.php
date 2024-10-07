<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\TestimonialText;
use Illuminate\Http\Request;
use Image;

class TestimonialController extends Controller
{
    public function TestimonialIndex()
    {
        $page =   Testimonial::all();
        return view('Server.Testimonial.index',compact('page'));
   
    }

    public function TestimonialTextPage(){
        $edit =   TestimonialText::where('id',1)->first();
        return view('Server.Testimonial.text_edit',compact('edit'));
    }

    public function TestimonialTextUpdate(Request $request){

        $update = TestimonialText::where('id','1')->first();
        $update->short = $request->short;
        $update->save();

        $noti = array(
            'message'=>'successfully Update',
            'alert-type'=>'success'
        );

        return redirect()->route('TestimonialIndex')->with($noti);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function TestimonialCreate()
    {
        $menu_all   =  Testimonial::all();
        return view('Server.Testimonial.create',compact('menu_all'));
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function TestimonialStore(Request $request)
    {

        $this->validate($request,[
            'name' => 'required',
            'short' => 'required',
            // 'image' => 'required',
        ]);

        $slug = $request->name;


        $store = new Testimonial();
        $store->name = $request->name;
        $store->short = $request->short;
        $store->sequence = $request->sequence;
        $store->slug = $slug;
        $store->description = $request->description;
        // $store->meta_title = $request->meta_title;
        // $store->meta_des = $request->meta_des;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fullName = time().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(73,73)->save('upload/Testimonial/'.$fullName);
            $store->image = $fullName;
            $store->save();
        }else {
            $fullName = 'default.png';
        }

        $store->save();

        $noti = array(
            'message'=>'successfully Store',
            'alert-type'=>'success'
        );

        return redirect()->route('TestimonialIndex')->with($noti);

    }

 
    public function TestimonialEdite($id)
    {
        $page =   Testimonial::find($id);
        return view('Server/Testimonial/edit',compact('page'));
   
    }


    public function TestimonialUpdate(Request $request, $id)
    {


        $slug = $request->name;
        $page = Testimonial::find($id);

        if ($request->hasFile('image')) {

            $image =$request->file('image');
            $fullName = time().'.'.$image->getClientOriginalExtension();
            @unlink('upload/Testimonial/'.$page->image);
            Image::make($image)->resize(60,60)->save('upload/Testimonial/'.$fullName);
            $page->image = $fullName;
            $page->save();
        }else {
            $fullName = $page->image;
        }

        $page->name = $request->name;
        $page->slug = $slug;
        $page->short = $request->short;
        $page->sequence = $request->sequence;
        $page->description = $request->description;
        $page->meta_title = $request->meta_title;
        $page->meta_des = $request->meta_des;
        $page->image = $fullName;
        $page->save();
        
        $noti = array(
            'message'=>'successfully Update',
            'alert-type'=>'success'
        );

        return redirect()->route('TestimonialIndex')->with($noti);
    }


    public function TestimonialMultiDelete(Request $request){


        $page = Testimonial::whereIn('id',$request->prints)->get();
        foreach(@$page as $key=>$p){
            @unlink('upload/Testimonial/'.@$p->image);
            $p->delete();
        }

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->back()->with($noti);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function TestimonialDelete($id)
    {
        

        
        $page = Testimonial::find($id);
        if (file_exists('upload/Testimonial/'.$page->image))
        {
            unlink('upload/Testimonial/'.$page->image);
        }
        $page->delete();

        $noti = array(
            'message'=>'successfully Deleted',
            'alert-type'=>'success'
        );

        return redirect()->route('TestimonialIndex')->with($noti);

        
        
    }

    // TestimonialActive

    public function TestimonialActive($id){

        $active = Testimonial::where('id',$id)->first();
        $active->status=2;
        $active->save();


        $noti = array(
            'message'=>'successfully Status Change',
            'alert-type'=>'success'
        );

        return redirect()->route('TestimonialIndex')->with($noti);
    }

    public function TestimonialDeActive($id){

        $active = Testimonial::where('id',$id)->first();
        $active->status=1;
        $active->save();


        $noti = array(
            'message'=>'successfully Status Change',
            'alert-type'=>'success'
        );

        return redirect()->route('TestimonialIndex')->with($noti);
    }


}
