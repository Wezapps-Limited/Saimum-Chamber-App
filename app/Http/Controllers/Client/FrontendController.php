<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\CategoryManage;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\NewsManage;
use App\Models\BlogManage;
use App\Models\ContactForm;
use App\Models\CareerManage;
use App\Models\Client;
use App\Models\Faq;
use App\Models\FaqText;
use App\Models\GoogleAnalyticsScript;
use App\Models\JoinUs;
use App\Models\OurExperts;
use App\Models\OurExpertsInfo;
use App\Models\SliderManage;
use App\Models\Testimonial;
use App\Models\VideoGallery;
use App\Models\VisaKeyContact;
use App\Models\VisaManage;
use App\Models\VisaManageGallery;
use App\Models\VisitorCount;
use App\Models\WhyChoose;
use Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Whoops\Run;

class FrontendController extends Controller
{
    //


    public function Index(){

    
        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['News'] = NewsManage::get();
        $data['Blog'] = BlogManage::take(3)->get();
        $data['testimonial'] = Testimonial::take(2)->get();
        $data['faq'] = Faq::get();
        $data['faq_text'] = FaqText::where('id',1)->first();
        $data['slider'] = SliderManage::get();
        $data['business_work_visa'] = VisaManage::where('type',1)->get();
        $data['private_visa'] = VisaManage::where('type',2)->get();
        $data['application_package'] = VisaManage::where('type',3)->get();
        $data['why_choose'] = WhyChoose::query()->limit(3)->get();
        $data['why_choose_four'] = WhyChoose::query()->skip(3)->take(4)->get();
        $data['our_expert_list'] = OurExperts::where('status',2)->take(4)->get();
        $data['client'] = Client::OrderBy('sequence','asc')->get();

        $user_ip = $_SERVER['REMOTE_ADDR'];
        $date = date('Y-m-d');
        $viewcount = VisitorCount::where('user_ip',$user_ip)->whereDate('created_at',$date)->first();

        if ($viewcount) {
            VisitorCount::where('user_ip',$user_ip)->whereDate('created_at',$date)->increment('viewcount');
        }else{
            $store =new VisitorCount();
            $store->user_ip = $user_ip;
            $store->viewcount = 1;
            $store->save();
        }
        return view('Client.home',$data);
    }




    public function News(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['News'] = NewsManage::get();
        return view('Client.single_page.news',$data);
    }
    

    public function NewsDetails($slug){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['News'] = NewsManage::where('slug',$slug)->first();
            // Fetch the previous news post
       $data['previousNews'] = NewsManage::where('id', '<', $data['News']->id)->orderBy('id', 'desc')->first();

    // Fetch the next news post
       $data['nextNews'] = NewsManage::where('id', '>', $data['News']->id)->orderBy('id', 'asc')->first();

        $data['recent'] = NewsManage::OrderBy('id','desc')->get()->take(6);
        return view('Client.single_page.news_details',$data);
    }

    public function BlogDetails($slug){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['News'] = BlogManage::where('slug',$slug)->first();
            // Fetch the previous news post
       $data['previousNews'] = BlogManage::where('id', '<', $data['News']->id)->orderBy('id', 'desc')->first();

    // Fetch the next news post
       $data['nextNews'] = BlogManage::where('id', '>', $data['News']->id)->orderBy('id', 'asc')->first();

        $data['recent'] = BlogManage::OrderBy('id','desc')->get()->take(6);
        return view('Client.single_page.blog_details',$data);
    }

    public function Blog(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['Blog'] = BlogManage::get();
        return view('Client.single_page.blog',$data);
    }

    public function Gallery(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['gallery'] = CategoryManage::OrderBy('sequence','asc')->get();
        return view('Client.single_page.gallery',$data);
    }
    public function Video(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['video'] = VideoGallery::OrderBy('sequence','asc')->get();
        return view('Client.single_page.video',$data);
    }

    public function About(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        $data['about'] = AboutUs::where('id',1)->first();
        $data['list'] = Testimonial::get();
        return view('Client.single_page.about',$data);
    }

   

    public function Payment(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.payment',$data);
    }

    public function Client(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.client',$data);
    }

    public function PressKit(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.press_kit',$data);
    }

    public function PrivacyPolicy(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.privary_policy',$data);
    }
    public function TermsOfService(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.terms_and_service',$data);
    }

    public function CookiePolicy(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.cookie_policy',$data);
    }

    public function Search(Request $request){

        $search = $request->search;

       

                // Perform search in BlogManage model
        $data['blog'] = BlogManage::where('title', 'like', "%$search%")
                           ->orWhere('description', 'like', "%$search%")
                           ->get();

        // Perform search in VisaManage model
        $data['visa'] = VisaManage::where('title', 'like', "%$search%")
                           ->orWhere('description', 'like', "%$search%")
                           ->get();

        $data['search'] = $request->search;
         return view('Client.single_page.search',$data);                  

    }

    public function refund_policy(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.refund_policy',$data);
    }

    public function Disclaimer(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.disclaimer',$data);
    }

    public function Career(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.career',$data);
    }

    public function website_design_development(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.website_design_development',$data);
    }

    public function software_development(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.software_development',$data);
    }

    public function app_development(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.app_development',$data);
    }

    public function hosting_vps(){

        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.hosting_vps',$data);
    }

    public function JoinUsPost(Request $request){


        $store = new JoinUs();
        $store->first_name = $request->first_name;
        $store->last_name = $request->last_name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->save();


        return redirect()->back()->with(['message'=>'successfully Received']);
        //return $request->all();
    }

    public function Contact(){
        $data['google_analytics'] = GoogleAnalyticsScript::where('id','1')->first();
        return view('Client.single_page.contact',$data);
    }


    public function AllExpertList(){
  
        $data['list'] = OurExperts::where('status',2)->get();
        return view('Client.single_page.all_expert',$data);
    }

    public function TestimonialList(){
  
        $data['list'] = Testimonial::get();
        return view('Client.single_page.all_testimonial',$data);
    }

    public function SingleVisa($slug){

        $data['visa'] = VisaManage::where('slug',$slug)->first();
        $data['key_contact'] = VisaKeyContact::get();
        $data['faq'] = Faq::get();
        $data['visa_gallery'] = VisaManageGallery::get();
        return view('Client.single_page.visa_details',$data);

    }

    public function SingleExpertise($slug){

        $data['person'] = OurExperts::where('id',$slug)->first();
        $data['person_expertise'] = OurExpertsInfo::where('expert_id',$data['person']->id)->get();
     
        return view('Client.single_page.person_details',$data);

    }


    public function ContactUsFormPost(Request $request){
        
   
        $store = new ContactForm();
        $store->name = $request->name;
        $store->l_name = $request->l_name;
        $store->email = $request->email;
        $store->mobile = $request->phone;
        $store->message = $request->message;
        $store->save();

        $this->MailSend($request);

        return redirect()->back()->with(['message'=>'successfully Received']);

    }

    public function MailSend(Request $request){

    // Fetch email_config directly within the controller
     $email_config = DB::table('email_configs')->where('id', '1')->first();

     $full_name = $request->name.' '.$request->l_name;

     $data =array(
        'email'=>$email_config->mail_to,
        'text'=>'Dear Saimum Chamber Admin, You’ve received the following message from '.@$full_name,
        'email'=>$request->email,
        'mobile'=>$request->mobile,
        'message'=>$request->message,
    );

                   
    Mail::send('Server/Mail/received_message', $data, function ($message) use($data,$email_config){
        $message->from($email_config->mail_username, 'Saimum Chamber');
        $message->to($data['email'], 'Saimum Chamber');
        $message->subject('Received new message');
    });


    }

    public function Subscriber(Request $request){
        $request->validate([
            'email'=>'required',
        ]);
        $store = new SubscriberManage();
        $store->email = $request->email;
        $store->save();

        return redirect()->back()->with(['message'=>'successfully Received']);
    }

    public function CareerPost(Request $request){

        $request->validate([
            'email'=>'required',
        ]);
        $store = new CareerManage();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->phone = $request->phone;
        $store->linkedin = $request->linkedin;
        $store->ex = $request->ex;
        $store->accecpt_condition = $request->accecpt_condition;

        if($request->hasFile('resume')){

            $imageName = time().'.'.request()->resume->getClientOriginalExtension();
            request()->resume->move(public_path('upload/Career/'), $imageName);
            $store->resume = $imageName;
            $store->save();
        }

        $store->save();

       $noti = array(
           'message'=>'successfully Received',
           'alert-type'=>'success'
       );

       return redirect()->back()->with($noti);
   
    }



}
